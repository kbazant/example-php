<?php
    define("TITLE", "Menu | Fine Dining Restaurant");
    include('includes/header.php');
?>

    <div id="menu-items">

        <h1>Our Delicious Menu</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde magni temporibus, quam iusto sequi harum architecto maxime facilis illum aperiam perspiciatis vero atque ratione, aliquam, voluptatibus aut dicta assumenda quos.</p>
        <p><em>Cick any menu item to learn more about it.</em></p>

        <hr>

        <ul>
            <?php foreach ($menuItems as $dish => $item) { ?>

                <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item[title]; ?> </a><sup>$</sup><?php echo $item[price]; ?></li>

                <?php } ?>

        </ul>

    </div>
    <!-- menu-items -->

    <?php include('includes/footer.php');
