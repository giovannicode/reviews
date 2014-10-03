<?php

include('gioCMS/carouselSlideshow.php');
include('gioCMS/FormCreator.php');

echo $_SERVER['DOCUMENT_ROOT'];

include ('config.inc.php');
include (MYSQL);

include('./views/header.html');

$carslide = new carouselSlideshow('images/movingDresser.jpg', 'images/movingDay.jpg', 'images/roomOfBoxes.jpg', 'images/movingTruck.jpg');
$carslide->addText(1,"Great Customer Service", "We provide greate moving services");
$carslide->addText(2, "Great Prices", "We will give you a flat rate");
$carslide->addText(3, "Fast and Easy", "We will do the job quickly");
$carslide->addText(4, "Great Savings", "We have the best prices");
$carslide->ec();

$form = new formCreator("quoteForm", "getQuote.php", "post", "true");
$form->addlt("Address","address1", '');
$form->addlt("City", "city1", '');
$form->addlt("State", "state1", '');
$form->addlt("Zip", "zip1", '');

$form->addlt("Address","address2", '');
$form->addlt("City", "city2", '');
$form->addlt("State", "state2", '');
$form->addlt("Zip", "zip2", '');
$form->addSbrb("quoteFormSubmit", "./images/sbmBtnInactive.png", "Reset");
$form->ec();

echo '<style type="text/css"><!--
#quoteForm
{
   border: 2px solid black;
}

#quoteFormSubmit
{
   background:url(\'./images/sbnBtnActive.png\') no-repeat;
   width: 100px;
   height: 35px;
   border: none;
   color: transparent;
}

#quoteFormSubmit:hover
{
   background:url(\'./images/sbmBtnInactive.png\') no-repeat;
   width: 100px;
   height: 35px;
   border: none;
   color: transparent;
}

/*form input[type=submit] {
	background : url("./images/sbnBtnActive.png") no-repeat center center;
	width : 115px;
	height :52px;
	border : none;
	color : transparent;
	font-size : 0
	}
	
form input[type=submit]:hover {
	background : url("./images/sbmBtnInactive.png") no-repeat center center;
	color: trasparent;
}	*/

--><style>';

include ('views/footer.html');
?>
