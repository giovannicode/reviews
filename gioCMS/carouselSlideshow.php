<?php
class carouselSlideshow
{
	private $image1;
	private $image2;
	private $image3;
	private $image4;
	
	private $head1;
	private $head2;
	private $head3;
	private $head4;
	
	private $text1;
	private $text2;
	private $text3;
	private $text4;
	
	function __construct($image1, $image2, $image3, $image4)
	{
		$this->image1 = $image1;
		$this->image2 = $image2;
		$this->image3 = $image3;
		$this->image4 = $image4;
	}
	
	function addText($num, $heading, $text)
	{
		switch ($num)
		{
			case 1:
				$this->head1= $heading;
				$this->text1 = $text;
				break;
			case 2:
				$this->head2 = $heading;
				$this->text2 = $text;
				break;
			case 3:
				$this->head3 = $heading;
			    $this->text3 = $text;
			    break;
			case 4:
				$this->head4 = $heading;
				$this->text4 = $text;
				break;
		}	
	}
	
	private function ecHTML()
	{
	  echo' 	    <div id="carouselSlideshow">
		       <div id="carousel_mainpic">
		          <img id="mainpicture" src="' . $this->image1 . '" alt="chicago festival" width="600px" height="400px"/>
			   </div>
			   <div id="textHolder">
			      <h3 id="carousel_head">' . $this->head1 . 
	              '<span id="carousel_head1">' . $this->head1 . '</span>
				  <span id="carousel_head2">' . $this->head2 . '</span>
				  <span id="carousel_head3">' . $this->head3 . '</span>
				  <span id="carousel_head4">' . $this->head4 . '</span>	
			      </h3>
			      
				  <p id="carousel_text">' . $this->text1 . '
				   <span id="carousel_text1">' . $this->text1 . '</span>
				   <span id="carousel_text2">' . $this->text2 . '</span>
				   <span id="carousel_text3">' . $this->text3 . '</span>
				   <span id="carousel_text4">' . $this->text4 . '</span>	
				  </p>	
			   </div>
			   <div id="imageStrip">
			      <img id="image1" src="' . $this->image1 . '" alt="glass of wine" width="145px" height="100px"/>
			      <img id="image2" src="' . $this->image2 . '" alt="two people posing,with the word deuces" width="145px" height="100px"/>
			      <img id="image3" src="' . $this->image3 . '" alt="chicago festival" width="145px" height="100px"/>
			      <img id="image4" src="' . $this->image4 . '" images/movingTruck.jpg" alt="chicago festival" width="145px" height="100px"/>
			   </div>
	        </div>' . "\n";
	}
	
	private function ecCSS()
	{
	    echo'<style type="text/css"><!--
	        #carouselSlideshow
			{
				position: relative;
				width: 600px;
				height: 520px;
				border: 2px solid red;
			}
			
			#carousel_mainpic
			{
			}
			
			#carousel_mainpic img
			{
			}
			
			#textHolder
			{
			    width: 600px;
				position: absolute;
				top: 250px;
				background-color: rgba(100,152,255, 0.7);
				border-top: 3px solid white;
				border-bottom: 3px solid white;
			}
			
			#textHolder h1
			{
			}
			
			#textHolder p
			{
			   font-size: 19px;
			   font-family: Arial;
			}
			
			#imageStrip
			{
			   background-color: black;
			}
			--></style>';
	}
	
	private function ecJS()
	{ 
			echo'<script>
			
			var text1 = $("#carousel_text1").text();
			var text2 = $("#carousel_text2").text();
			var text3 = $("#carousel_text3").text();
			var text4 = $("#carousel_text4").text();
			
			var head1 = $("#carousel_head1").text();
			var head2 = $("#carousel_head2").text();
			var head3 = $("#carousel_head3").text();
			var head4 = $("#carousel_head4").text();
			
		    $(document).ready(function () 
		    {
			    $("#carousel_text1").hide();
	            $("#carousel_text2").hide();
		        $("#carousel_text3").hide();
		        $("#carousel_text4").hide();
		        
		        $("#carousel_head1").hide();
	            $("#carousel_head2").hide();
		        $("#carousel_head3").hide();
		        $("#carousel_head4").hide();
		        
				$("#image1").hover(function(){
			    
				var imageSrc = $("#image1").attr("src");
			    $("#mainpicture").attr("src", imageSrc);
			    
			    $("#carousel_head").text(head1);
			    $("#carousel_text").text(text1);
			    });
			
			    $("#image2").hover(function(){
			    var imageSrc = $("#image2").attr("src");
			    $("#mainpicture").attr("src", imageSrc);
			    
			    $("#carousel_head").text(head2);
			    $("#carousel_text").text(text2);
			    });
			    
			    $("#image3").hover(function(){
			    var imageSrc = $("#image3").attr("src");
			    $("#mainpicture").attr("src", imageSrc);
			    
			    $("#carousel_head").text(head3);
			    $("#carousel_text").text(text3);
			    });
			    
			    $("#image4").hover(function(){
			    var imageSrc = $("#image4").attr("src");
			    $("#mainpicture").attr("src", imageSrc);
			    
			    $("#carousel_head").text(head4);
			    $("#carousel_text").text(text4);
			    });
		    });</script>';
	}
	
	function ec()
	{				
        $this->ecHTML();
        $this->ecJS();
        $this->ecCSS();
    }
}
?>