<?php
include ('config.inc.php');
include (MYSQL);
include ('mysqlFunctions.php');
include ('royMovLib/Review.php');

include ('views/header.html');

$name = $_POST['firstName'];
$location = $_POST['location'];
$stars = $_POST['stars'];
$review = $_POST['review'];

$review = new Review($name, $location, $stars, $review);
DBSave($review);

echo 'Thank you for your review!';

include ('views/footer.html');


?>