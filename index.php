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
	$my_age = ($this_year - $birth_year);

?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>Example PHP Website:
			<?php echo TITLE; ?>
		</title>
	</head>

	<body>
		<h1>Page Title:
			<?php echo TITLE; ?>
		</h1>

		<div id="sandbox">
			<h3>Today's Date:</h3>
			<p>
				<?php echo $today; ?>
			</p>

			<h3>My Name:</h3>
			<p>
				<?php echo $my_name; ?>
			</p>

			<h3>My Favourite Colour:</h3>
			<p>
				<?php echo $fav_colour; ?>
			</p>

			<h3>My Age:</h3>
			<p>
				<?php echo $my_age; ?>
			</p>
		</div>

		<!--Copyright info-->
		<small>&copy;<?php echo $this_year?> - <?php echo $my_name?></small>

	</body>

	</html>