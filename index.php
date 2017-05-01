<?php

	// Define a Constant
	define("TITLE", "Variables and Constants ");
	
	// Your Variables
	$my_name = "Kris";
	$fav_colour = "blue";
	$birth_year = 1980; 
	
	//Set time zone
	date_default_timezone_set('Europe/London');

	//Set time and date format
	$today = date('m d Y');
	$this_year = date('Y');	

	/*
	Use PHP to calculate the difference
	between your birth year and this year
	to show your age dynamically
	*/

?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>Example PHP Website</title>
	</head>

	<body>
		<?php
		print ("Hello World!");
	?>
	</body>

	</html>