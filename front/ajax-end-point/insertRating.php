<?php

require_once __DIR__ . "/RatingC.php";
$rating = new RatingC();
// Here the user id is harcoded.
// You can integrate your authentication code here to get the logged in user id
session_start();
$userId = $_SESSION['id'];

if (isset($_POST["index"], $_POST["course_id"])) {
    
    $courseId = $_POST["course_id"];
    $ratingIndex = $_POST["index"];
    
    $rowCount = $rating->isUserRatingExist($userId, $courseId);
    
    if ($rowCount == 0) {
        $insertId = $rating->addRating($userId, $courseId, $ratingIndex);
        echo "You have added rating already.";

    } else {
        
        echo "You have added rating already.";
    }
}
