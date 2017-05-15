<?php
    define("TITLE", "Menu Item | Fine Dining Restaurant");
    include('includes/header.php');

    function strip_bad_chars($input) {
        $output = preg_replace("/[^a-zA-Z0-9_-]", "", $input);
        return $output;
    }

    if (isset($_GET['item'])) {
        $menuItem = $_GET['item'];
        $dish = $menuIems[$menuItem];
    } 
?>