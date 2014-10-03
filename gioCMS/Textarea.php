<?php

class LabelTextarea
{
	private $label;
	private $name;
	private $rows;
	private $cols;
	private $text = "";
	
	function __construct($label, $name, $rows, $cols, $text)
	{
	  $this->label = $label;
	  $this->name = $name;
	  $this->rows = $rows;
	  $this->cols = $cols;
	  $this->text = $text;
	  
	}
	
	public function ec()
	{
		echo '<div><label for="' . $this->name . '">' . $this->label . '</label><textarea name="' . $this->name . '" rows="' . $this->rows . '" cols="' . $this->cols . 
		'">Testing testing</textarea></div>' . "\n";
	}
}
?>