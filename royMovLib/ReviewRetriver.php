<?php
include ('royMovLib/ReviewBox.php');

include ('config.inc.php');
include(MYSQL);

class ReviewRetriver
{
	private $reviews = array();
	
	function __construct()
	{
		global $dbc;
		
	    $q = "SELECT * FROM reviews";
		$r = mysqli_query($dbc, $q);
		
		while($row = $r->fetch_object())
		{
			$name = $row->name;
			$location = $row->location;
			$date = $row->date;
			$stars = $row->stars;
			$review = $row->review;
			
			$rb = new ReviewBox($name, $location, $date, $stars, $review);
			
			$this->reviews[] = $rb;
		}
	}
	
	public function ec()
	{
        $this->ecHTML();
        $this->ecCSS();
	}
	
	private function ecHTML()
	{
	    foreach ($this->reviews AS $review)
		{
			$review->ec();
		}
	}
	
	private function ecCSS()
	{
		echo '<style type="text/css"><!-- 
		.ReviewBox
		{
		   background-color: white;
		   border:5px solid gray;
		}
		
		.ReviewBox p
		{
		   background-color: blue;
		   color: white;
		   font-weight: bold;
		}
		
		.stars1
		{
		   background:url(\'images/stars.jpg\') -0px -7px;
		   background-size: cover;
		   background-repeat: no-repeat;
		   width: 160px;
		   height:50px;

		}
		
		.stars2
		{
		   background:url(\'images/stars.jpg\') -0px -52px;
		   background-size: cover;
		   background-repeat: no-repeat;
		   width: 160px;
		   height:50px;

		}
		
		.stars3
		{
		   background:url(\'images/stars.jpg\') -0px -97px;
		   background-size: cover;
		   background-repeat: no-repeat;
		   width: 160px;
		   height:50px;

		   
		}
		
		.stars4
		{
		   background:url(\'images/stars.jpg\') -0px -142px;
		   background-size: cover;
		   background-repeat: no-repeat;
		   width: 160px;
		   height:50px;

		   
		}
		
		.stars5
		{
		   background:url(\'images/stars.jpg\') -0px -187px;
		   background-size: cover;
		   background-repeat: no-repeat;
		   width: 160px;
		   height:50px;

		   
		}
		--></style>';
		
	}
	
}
?>