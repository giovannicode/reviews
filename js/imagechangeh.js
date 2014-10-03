
//Window.onload means that the function will be called when 
//the window starts loading.
window.onload = function () 
{
    //Creates a new variable and attaches a new Rollover function for each
	//image in the image strip.
    rollover = new Rollover("image1");
	rollover = new Rollover("image2");
	rollover = new Rollover("image3");
	rollover = new Rollover("image4");
	rollover = new Rollover("image5");
}