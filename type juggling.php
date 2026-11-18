<?php
 $num = 3;
 $num1 = '4';
 $items = $num + $num1;
 $total = $items;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Type Juggling</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    <h1>Total items</h1>
    <h2>Pen: <?= $num ?></h2>
    <h2>Paper: <?= $num1 ?></h2>
    <h2>Total Items: <?= $total ?></h2>
    </body>
</html>