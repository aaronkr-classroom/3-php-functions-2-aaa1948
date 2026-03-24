<?php
function write_logo() {
    echo '<img src="img/logo.png" alt="iogo" />';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>If, switch, match</title>
        <link rel="stylesheet" href="css/styles.css"> 
    </head>
    <body>
        <h1><?php write_logo(); ?> The Candy Store</h1>
        <nav>
            <a href="index.php">Home</a> |
            <a href="Candy.php">Candy</a> |
            <a href="about.php">About</a> |
            <a href="Contact.php">Contact</a> |
