<?php
	
	// Constants
	define("TITLE", "For Loop");
	
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
				 
				    for ($a = 0; $a <= 20; $a++) {
								
							echo "Number: $a <br>";
							
						}
				 
				?>
				
			</div><!-- end sandbox -->			
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
	</body>
</html>
