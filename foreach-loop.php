<?php
	
	// Constants
	define("TITLE", "Foreach Loop");
	
	// Custom Variables
	$my_name = "Kris";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
	</head>
	<body>
		<div class="wrapper">
			
			<h2>Example: <?php echo TITLE; ?></h2>
			
			<div class="sandbox">
				
				<?php
				 
				    // foreach loop of 3 programming languages
						$programming_languages = array("PHP", "JavaScript", "Java");
				
						//loop through the $programmming_languages array
						foreach ($programming_languages as $programming_language) {
				
						echo "It's useful to know $programming_language <br>";
						}
				?>
				
			</div><!-- end sandbox -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		

	</body>
</html>
