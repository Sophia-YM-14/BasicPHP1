<?php
$name = 'Sophia Y.M.';
$candyName = 'Chocolate';
$price = 2;
$stock = 5;
$ordered = 3;

$nutrition = [
    'fat' => 16,
    'sugar' => 67,
    'salt' => 4.7,
];

if ($stock >= $ordered) {
    $stockMessage = 'Your order is available!';
} else {
    $stockMessage = 'Sorry, there is not enough candy in stock.';
}

switch ($candyName) {
    case 'Chocolate':
        $candyMessage = 'Chocolate is one of our customer favorites.';
        break;
    case 'Mints':
        $candyMessage = 'Mints are a cool and refreshing treat.';
        break;
    case 'Fudge':
        $candyMessage = 'Fudge is soft, rich, and delicious.';
        break;
    default:
        $candyMessage = 'Ask us about the rest of our candy selection.';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Candy Store - If and Switch Statements</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <h2>PHP Control Statements</h2>

        <p>Welcome, <?php echo $name; ?>!</p>

        <h2>If-Else: Check Candy Stock</h2>
        <p>Candy: <?php echo $candyName; ?></p>
        <p>Price per pack: $<?php echo $price; ?></p>
        <p>Available packs: <?php echo $stock; ?></p>
        <p>Packs ordered: <?php echo $ordered; ?></p>
        <p><?php echo $stockMessage; ?></p>

        <h2>Switch: Candy Description</h2>
        <p><?php echo $candyMessage; ?></p>

        <h2>Nutrition (per 100g)</h2>
        <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
        <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
        <p>Salt: <?php echo $nutrition['salt']; ?>%</p>
    </body>
</html>
