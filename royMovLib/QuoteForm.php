<?php
include_once('../gioCMS/FormCreator');

class QuoteForm
{
	
	
	function __construct()
	{
		$form = new $FormCreator("QuoteForm", "getQuote.php", "post", "true");
		$form->ec();
	}
	
}
?>
