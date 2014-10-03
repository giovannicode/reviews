<?php

include ('royMovLib/ReviewRetriver.php');

include_once('config.inc.php');
include_once(MYSQL);
include ('./views/header.html');
echo '<button name="wrtReview" onclick="change()">Write A Review</button>';
echo '<script type="text/javascript">
function change()
{
   window.location = "writeReview.php";
}</script>';

$revret = new ReviewRetriver();
$revret->ec();

include ('./views/footer.html');
?>