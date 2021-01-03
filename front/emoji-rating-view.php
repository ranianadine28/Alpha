<?php
if($userRating==0){
for ($count = 1; $count <= 5; $count ++) {
    $starRatingId = $row['id_evenement'] . '_' . $count;
    
    if ($count == $userRating) {
        ?>
                    <li value="<?php echo $count; ?>" id="<?php echo $starRatingId; ?>"
    class="star"><img class="images" src="./img/<?php echo $apperance . $count; ?>-filled.png"></li>
<?php 
                } else {
?>
                    <li value="<?php $count; ?>" id="<?php echo $starRatingId; ?>"
    class="star"
    onclick="addRating(this,<?php echo $row['id_evenement']; ?>,<?php echo $count; ?>);"
    onMouseOver="mouseOverRating(<?php echo $row['id_evenement']; ?>,<?php echo $count; ?>,'<?php echo $apperance; ?>');"
    onMouseLeave="mouseOutRating(<?php echo $row['id_evenement']; ?>,<?php echo $userRating; ?>,'<?php echo $apperance; ?>');"><img class="images"
    src="./img/<?php echo $apperance . $count; ?>-open.png"></li>
<?php 
                }
            }
        } else {
?>


<?php
for ($count = 1; $count <= 5; $count ++) {
    $starRatingId = $row['id_evenement'] . '_' . $count;
    
    if ($count == $userRating1) {
        ?>
                    <li value="<?php echo $count; ?>" id="<?php echo $starRatingId; ?>"
    class="star"><img  class="images"src="./img/<?php echo $apperance . $count; ?>-filled.png"></li>
<?php 
                } else {
?>
                    <li value="<?php $count; ?>" id="<?php echo $starRatingId; ?>"
    class="star"
    onclick="addRating(this,<?php echo $row['id_evenement']; ?>,<?php echo $count; ?>);"
    onMouseOver="mouseOverRating(<?php echo $row['id_evenement']; ?>,<?php echo $count; ?>,'<?php echo $apperance; ?>');"
    onMouseLeave="mouseOutRating(<?php echo $row['id_evenement']; ?>,<?php echo $userRating; ?>,'<?php echo $apperance; ?>');"><img class="images"
    src="./img/<?php echo $apperance . $count; ?>-open.png"></li>
<?php 
                }
            }
        
?>


<?php 
                }
           
?>