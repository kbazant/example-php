<?php

	// Constants
	define("TITLE", "Multi-Dimentional Arrays");
 
	// Custom Variables
	$my_name = "Kris";

	// Multi-Dimentional Array 
	$programming_languages = array (
		array(
			name => "JavaScript",
			year => 1995,
			usage => "front and back-end web development."
		),
		array(
			name => "PHP",
			year => 1994,
			usage => "server-side web development."
		),
		array(
			name => "Java",
			year => 1995,
			usage => "general-purpose programming."
		)
	); 

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

		<h3>Most Popular Programming Languages:</h3>
		<!--1. JavaScript-->
		<h4>
			<?php echo $programming_languages[0][name]; ?>
		</h4>
		<p>This programming language was invented in
			<?php echo $programming_languages[0][year]; ?>. It is used for
			<?php echo $programming_languages[0][usage]; ?>
		</p>

		<!--2. PHP-->
		<h4>
			<?php echo $programming_languages[1][name]; ?>
		</h4>
		<p>This programming language was invented in
			<?php echo $programming_languages[1][year]; ?>. It is used for
			<?php echo $programming_languages[1][usage]; ?>
		</p>

		<!--3. Java-->
		<h4>
			<?php echo $programming_languages[2][name]; ?>
		</h4>
		<p>This programming language was invented in
			<?php echo $programming_languages[2][year]; ?>. It is used for
			<?php echo $programming_languages[2][usage]; ?>
		</p>

		<!--Copyright info-->
		<small>&copy;<?php echo date('Y');  ?> - <?php echo $my_name; ?></small>

	</body>

	</html>