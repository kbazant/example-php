<?php

	// Constants
	define("TITLE", "Arrays");

	// Custom Variables
	$my_name = "Kris";
	$topic = "Arrays";

	// PHP Frameworks Array 
	$phpframeworks = array("Laravel", "Symfony");

?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>Example PHP Website
			<?php echo TITLE; ?>
		</title>
	</head>

	<body>

		<h1>Topic:
			<?php echo TITLE ?>
		</h1>

		<h2>PHP Frameworks</h2>
		<ul>
			<li>
				<?php echo $phpframeworks[0]; ?>
			</li>
			<li>
				<?php echo $phpframeworks[1]; ?>
			</li>
		</ul>

		<!--Copyright info-->
		<small>&copy;<?php echo date('Y');  ?> - <?php echo $my_name; ?></small>

	</body>

	</html>