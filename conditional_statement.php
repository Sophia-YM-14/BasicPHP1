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

        <h2>Check Candy Stock</h2><!-- Using an if statement to check candy stock -->
        <p>Candy: <?php echo $candyName; ?></p>
        <p>Price per pack: $<?php echo $price; ?></p>
        <p>Available packs: <?php echo $stock; ?></p>
        <p>Packs ordered: <?php echo $ordered; ?></p>
        <p><?php echo $stockMessage; ?></p>

        <h2>Candy Description</h2><!-- Using a switch statement to provide a description for each candy -->
        <p><?php echo $candyMessage; ?></p>

        <h2>Nutrition (per 100g)</h2><!-- Using a for-each loop to display nutrition facts -->
        <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
        <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
        <p>Salt: <?php echo $nutrition['salt']; ?>%</p>
    </body>
</html>
