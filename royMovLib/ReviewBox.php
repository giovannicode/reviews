<?php
class ReviewBox
{
	private $name;
	private $location;
	private $date;
	private $stars;
	private $review;
	
	function __construct($name, $location, $date, $stars, $review)
	{
		$this->name = $name;
		$this->location = $location;
		$this->date = $date;
		$this->stars = ReviewBox::getStars($stars);
		$this->review = $review;
	}
	
	public function ec()
	{
		echo '<div class="ReviewBox"><div class="'. $this->stars . '"></div><p>' . $this->name . " " . $this->location . "  " . $this->date . '</p><div>'. $this->review . '</div></div>'. "\n";
	}
	
	private static function getStars($stars)
	{
		$class = "";
		
		switch ($stars)
		{
			case 1:
				$class = "stars1";
				break; 
			case 2:
				$class = "stars2";
				break;
			case 3:
				$class = "stars3";
				break; 
			case 4:
				$class = "stars4";
				break;   
			case 5:
				$class = "stars5";
				break;  
		}	
		return $class;
	}
}
?>