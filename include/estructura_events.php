<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_estructura  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessList"]=true;


	}

//	handlers

				// List page: Before process
function BeforeProcessList(&$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
$sqlest="call gen_estructura('".$_SESSION["UserID"]."',5,6,'2021G')";
CustomQuery($sqlest);
;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>