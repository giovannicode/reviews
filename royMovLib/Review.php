<?php
class Review
{
	private $id;
	private $name;
	private $location;
	private $date;
	private $stars;
	private $review;
	
	function __construct($name, $location, $stars, $review)
	{
		$this->name = $name;
		$this->location = $location;
		$this->stars = $stars;
		$this->review = $review;
	}
	
	public function getValues()
	{
		return "NULL, '$this->name', '$this->location', CURDATE() + 0, '$this->stars', '$this->review'";
	}
}
?>