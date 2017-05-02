<?php
	
	// Constants
	define("TITLE", "Do While Loop");
	
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
				 
				    $i = 1;
				
						do {
							echo "Number: $i <br>";
							$i++;
							
						} while ( $i <= 10);
				
				?>
				
			</div><!-- end sandbox -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
	</body>
</html>
