<?php
    define("TITLE", "Menu Item | Fine Dining Restaurant");
    include('includes/header.php');
    if (isset($_GET['item'])) {
        $menuItem = $_GET['item'];
        $dish = $menuIems[$menuItem];
    } 
?>