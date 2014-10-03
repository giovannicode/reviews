<?php
include ('./gioCMS/FormCreator.php');

include ('config.inc.php');
include (MYSQL);

include ('./views/header.html');

if(!isset($_POST['firstname']))
{
$formCreator = new formCreator('myform', 'processReview.php', 'post', 'return true');
$formCreator->addlt('First Name', 'firstName', '');
$formCreator->addlt('Location', 'location', '');
$formCreator->addlt('Stars', 'stars', '');
$formCreator->addlta('Review', 'review', '10', '25', '');
$formCreator->addSbrb('myformSubmit','./images/sbmBtnInactive.png', 'Clear');
$formCreator->ec();
}
else
{
	
}

include ('./views/footer.html');
?>