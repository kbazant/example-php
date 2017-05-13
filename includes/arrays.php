<?php 

	//Nav Menu Items
	$navItems = array(
		
		array(
			slug => "index.php",
			title => "Home"
		),
		array(
			slug => "team.php",
			title => "Team"
		),
		array(
			slug => "menu.php",
			title => "Menu"
		),
		array(
			slug => "contact.php",
			title => "Contact"
		),
		
	);

	//Team Members

	$teamMembers = array(
		array(
			name => "Name 1",
			position => "Owner",
			bio => "The founder of the best restaurant.",
			img => "name-1" 
		),

		array(
			name => "Name 2",
			position => "Manager",
			bio => "The best of the best.",
			img => "name-2" 
		),

		array(
			name => "Name 3",
			position => "Head Chef",
			bio => "Master of his craft.",
			img => "name-3" 
		),
	);

	//Menu Items

	$menuItems = array (
		"club-sandwich" => array(
			title => "Club Sandwich",
			price => 11,
			blurb => "Bacon ipsum dolor amet t-bone ribeye salami, drumstick alcatra meatball beef short ribs boudin landjaeger shankle hamburger chicken chuck. Frankfurter fatback sirloin ham hock, pork chop pork belly boudin bacon ground round picanha pig drumstick kielbasa turkey.",
			drink => "Club Soda"
		),	

		"dill-salmon" => array(
			title => "Lemon &amp; Dill Salmon",
			price => 18,
			blurb => "Bacon ipsum dolor amet shankle pork pig, swine bresaola alcatra picanha cow ground round beef. Pork belly cow ham hock, shankle beef pig pork chop filet mignon pastrami boudin ground round.",
			drink => "Fancy Wine"
		),

		"super-salad" => array(
			title => "The Super Salad<sup>&reg;</sup>",
			price => 34,
			blurb => "Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.",
			drink => "Water"
		),

		"mexican-barbacoa" => array(
			title => "Mexican Barbacoa",
			price => 22,
			blurb => "Carrot cake gingerbread croissant pastry croissant cake candy. Cheesecake wafer tart croissant oat cake gummies bonbon lollipop. Jelly-o sugar plum liquorice jelly beans powder jelly-o jelly-o jelly beans tiramisu.",
			drink => "Beer with a Lime"
		),

	);

?>