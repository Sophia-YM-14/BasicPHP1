<?php
$name = 'Sophia';
$favorites = ['Chocolate', 'Tiramisu', 'Fudge',];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Echo Shorthand</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <h2>A wonderful day to you! <?= $name ?></h2>
        <p>Your favorite type of candy is:
        <?= $favorites [2] ?>.</p>
    </body>
</html>