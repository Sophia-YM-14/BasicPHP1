<?php
$best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Bubble gum', 'Toffee', 'Jelly beans'];
$candy_prices = [2.00, 1.50, 1.75];
$nutrition = [
    'fat' => 16,
    'sugar' => 67,
    'salt' => 4.7,
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>The Candy Store - PHP Loops</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <h2>PHP Loops</h2>
        <p>These examples use the best sellers, candy prices, and nutrition facts</p>

        <h2>Best Sellers</h2><!-- Using a while loop to display the best sellers -->
        <ul>
            <?php
            $index = 0;
            while ($index < count($best_sellers)) {
                echo '<li>' . htmlspecialchars($best_sellers[$index]) . '</li>';
                $index++;
            }
            ?>
        </ul>

        <h2>Prepare Three Candy Packs</h2><!-- Using a do-while loop to prepare three candy packs -->
        <?php
        $pack = 1;
        do {
            echo '<p>Pack ' . $pack . ' is ready for the customer.</p>';
            $pack++;
        } while ($pack <= 3);
        ?>

        <h2>Candy Prices</h2><!-- Using a for loop to display candy prices -->
        <ul>
            <?php
            for ($index = 0; $index < count($candy_prices); $index++) {
                echo '<li>' . htmlspecialchars($best_sellers[$index]) . ': $'
                    . number_format($candy_prices[$index], 2) . ' per pack</li>';
            }
            ?>
        </ul>

        <h2>Nutrition Facts (per 100g)</h2><!-- Using a for-each loop to display nutrition facts -->
        <?php foreach ($nutrition as $nutrient => $amount): ?>
            <p><?php echo htmlspecialchars(ucfirst($nutrient)); ?>: <?php echo htmlspecialchars((string) $amount); ?>%</p>
        <?php endforeach; ?>
    </body>
</html>