<?php

class Sbrb
{
	private $sbmInAct;
    private $sbmAct;
    private $id;
    
    function __construct($id, $sbmInAct, $sbmAct)
    {
       $this->id = $id;
       $this->sbmInAct = $sbmInAct;
       $this->sbmAct = $sbmAct;
    }
    
    public function ec()
    {
       echo '<div><input id="' . $this->id . '" type="submit" value="test"/>' . 
                 '<input type = "reset" value = "Reset"/>' . "\n";     
    }
}

?>