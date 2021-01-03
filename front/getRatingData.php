<?php

require_once "../Core/RatingC.php";
$rating = new RatingC();
// Here the user id is harcoded.
// You can integrate your authentication code here to get the logged in user id
$userId = $_SESSION['id'];

$apperance = "emoji";

$courseResult = $rating->getEvenement($_GET['id_evenement']);
if (! empty($courseResult)) {
    foreach ($courseResult as $row) {
        $userRating = $rating->getUserRating($userId, $row['id_evenement']);
        $userRating1 = $rating->getAverageRating( $row['id_evenement']);

        $totalRating = $rating->getTotalRating($row['id_evenement']);
        $date = date_create($row["date"]);
        ?>
<div class="row-item">
    <div class="row-title"><p style="color:#FF0000">Notez l'événement : <?php echo $row['name']; ?></p></div>
    <ul class="list-inline" id="list-<?php echo $row['id_evenement']; ?>">
 <?php require  "emoji-rating-view.php"; ?>

        <img src="img/loader.gif" class="loader-icon" id="loader-icon">
    </ul>
    <div class="response" id="response-<?php echo $row['id_evenement']; ?>"></div>


    <p class="review-note">Total Reviews: <?php echo $totalRating; ?> Average: <?php echo $userRating1; ?></p>
    
</div>
<?php
    }
}
?>