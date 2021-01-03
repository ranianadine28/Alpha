function mouseOverRating(evenementId, rating, appearance) {
 
		ratingIconPrefix = "./img/" + appearance;
		for (var i = 1; i <= rating; i++) {
				ratingIconPrefix = "./img/" + appearance + "1";
			}
			if (i == rating) {
				$('#' + evenementId + "_" + i + ' img').attr('src',
						ratingIconPrefix + "-filled.png");
			}
	
}

function mouseOutRating(evenementId, userRating, appearance) {
	var ratingId;
		if (userRating <= 5) {
			for (var i = (userRating + 1); i <= 5; i++) {
				$('#' + evenementId + "_" + i + ' img').attr('src',
						"./img/" + appearance + "-open.png");
			}
		}
		$(".selected img").attr('src', "./img/emoji"  + "-filled.png");

		ratingIconPrefix = "./img/emoji";

		if (userRating <= 5) {
			for (var i = 1; i <= 5; i++) {
				ratingIconPrefix = "./img/emoji" + i;

				if (userRating == i) {
					$('#' + evenementId + "_" + i + ' img').attr('src',
							ratingIconPrefix + "-filled.png");
				} else {
					$('#' + evenementId + "_" + i + ' img').attr('src',
							ratingIconPrefix + "-open.png");
				}
			}
		}
		var selectedImageSource = $(".selected img").attr('src');
		if (selectedImageSource) {
			selectedImageSource = selectedImageSource.replace('open', "filled");
			$(".selected img").attr('src', selectedImageSource);
		}

}

function addRating(currentElement, evenementId, ratingValue, appearance) {
	var loaderIcon = $(currentElement).closest(".row-item");

	$.ajax({
		url : "ajax-end-point/insertRating.php",
		data : "index=" + ratingValue + "&course_id=" + evenementId,
		type : "POST",
		beforeSend : function() {
			$(loaderIcon).find("#loader-icon").show();
		},
		success : function(data) {
			loaderIcon = $(currentElement).closest(".row-item");
			$(loaderIcon).find("#loader-icon").hide();
			if (data != "") {
				$('#response-' + evenementId).text(data);
				return false;
			}
			if (appearance == 'star') {
				$('#list-' + evenementId + ' li').each(
						function(index) {
							$(this).addClass('selected');
							if (index == $('#list-' + evenementId + ' li').index(
									currentElement)) {
								return false;
							}
						});
			} else {
				$(currentElement).addClass('selected');
			}
		}
		
	});
    location.reload();

}
