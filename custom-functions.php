<?php
	
	// Constants
	define("TITLE", "Custom Functions");
	
	// Custom Variables
	$my_name	= "Kris";

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
					
					// custom function
					function learningToCode() {
						
						echo "Code every day!";
						
					}
				
					$websitesAndApps = true;
					
					if($websitesAndApps) {
						
						learningToCode();
						
					} else {
						
						echo "Going nowhere.";	
						
					}
					
				?>
				
			</div><!-- end sandbox -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
	</body>
</html>
