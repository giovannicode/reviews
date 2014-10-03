
//This is simply a shortcut to call the element by its id.
//You use the "$" prefix instead of having to type "document.getElementById" every single time you
//want to call an element by its id.
var $ = function (id) 
{
   return document.getElementById(id); 
}

//This is the actual function that will change the image in the "Main Picture".
//It takes one parameter, which will be the id of the image tag of which the mouse is hovered over.
var Rollover = function ( imageId) 
{
	//Gets the id of the image tag (the image in the image strip) and stores it in a variable named this.image.
     this.image = $(imageId);

    // Attach the onmouseover event to the image
    this.image.onmouseover = function () 
	{
	  //When the user hovers their mouse over the picture, the URL of the "Main Picture" will be
	  //replaced with the URL of the image in the image strip.
	  
	  //$(imageId).src will retrive the URL of the image in the image strip.
	  //$(mainpicture).src allows you to set the URL of the image.
	  $("mainpicture").src = $(imageId).src;
    }
}