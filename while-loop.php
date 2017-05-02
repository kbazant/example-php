<?php
	
	// Constants
	define ("TITLE", "While Loop");
	
	// Custom Variables
	$my_name = "Kris";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <!-- TITLE --></title>
	</head>
	<body>
		<div class="wrapper">

			
			<h2>Your Example: <?php echo TITLE; ?></h2>
			
			<div class="sandbox">
				
				<?php
				 
				    // set variable with starting number
						$starting_num = 10;
				
						//While $starting_num is less or equal to 20
						while ($starting_num <= 20) {
							 
							//echo the value of the variable on the screen
							echo $starting_num . "<br>";
							
							//then increment the value by 1
							$starting_num++;
							
						}
				 
				?>
				
			</div><!-- end sandbox -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y')?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
	</body>
</html>
