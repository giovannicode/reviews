<?php

class LabelTextbox
{
    private $label;
    private $name;
    private $text = "";
    
    function __construct($label, $name, $text)
    {
          $this->label = $label;
          $this->name = $name;
          $this->text = $text;
    }
    
    public function contruct2($label, $name)
    {
       $this->label = $label;
       $this->name = $name;
    }
   
    public function ec()
    {
       echo '<div><label for="' . $this->name . '">' . $this->label . '</label><input type="text" name="' . $this->name . '" id="' . $this->name . '" value="' .                    $this->text . '"/><span id="' . $this->name . '_error"> </span></div>' . "\n";
    }
}

?>