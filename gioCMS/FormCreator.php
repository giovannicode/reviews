<?php
include ('LabelTextbox.php');
include ('Textarea.php');
include('Sbrb.php');


class formCreator
{
	private $classe;
    private $name;
    private $id;
    private $location;
    private $method;
    private $onSubmit;
    private $inputs = array();
    private $index = 0;
    
    function __construct($name, $location, $method, $onSubmit)
    {
       $this->name = $name;
       $this->id = $name;
       $this->location = $location;
       $this->method = $method;
       $this->onSubmit = $onSubmit;
    }
    
    public function addlt($label, $name, $textbox)
    {
       $temp = new LabelTextbox($label, $name, $textbox);
       $this->inputs[] = $temp;
    }
    
    public function addlt2($label, $name)
    {
       $temp = new LabelTextbox($label, $name, '');
       $this->inputs[] = $temp;
    }
    
    public function addlta($label, $name, $rows, $cols, $text)
    {
    	$temp = new LabelTextarea($label, $name, $rows, $cols, $text);
    	$this->inputs[] = $temp;
    }
    
    public function addSbrb($id, $subVal, $resVal)
    {
       $temp = new Sbrb($id, $subVal, $resVal);
       $this->inputs[] = $temp;
    }
    
    public function addTextarea($name, $row, $col)
    {
    	
    }
    
    public function ec()
    {
       echo '<form name="' . $this->name . '" id="' . $this->id . '" method="' . $this->method . '" action="' . $this->location . '" onsubmit="' . $this->onSubmit . '">' . "\n";
       foreach ($this->inputs AS $input)
       {
          $input->ec();
       }
       echo '</form>' . "\n";
    }
}
?>