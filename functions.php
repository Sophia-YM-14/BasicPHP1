<?php
declare(strict_types=1);
$candy = [
    'Toffee' => ['price' => 3, 'stock' => 12],
    'Mints' => ['price' => 2, 'stock' => 26],
    'fudge' => ['price' => 4, 'stock' => 8]
];

$tax = 20;

function get_reorder_message(int $stock): string
{
    return ($stock < 10) ?'Yes' : 'No'; 
}

function get_total_value(float $price, int $quantity): float
{
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax = 0): float
{
    return ($price * $quantity) * ($tax / 100);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Functions Example</title>
        <link rel="stylesheet" href="css/supply.css">
    </head>
    <body>
        <header>
            <h1>The Cake Shop</h1>
            <h2>Stock Control</h2>
        </header>
        <main>
            <div class="card">
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Stock</th>
                        <th>Re-order</th>
                        <th>Total Value</th>
                        <th>Tax Due</th>
                    </tr>
                    <?php foreach ($candy as $product_name => $data) { ?>
                        <tr>
                            <td><?= $product_name ?></td>
                            <td><?= $data['stock'] ?></td>
                            <td><?= get_reorder_message($data['stock']) ?></td>
                            <td>₱<?= get_total_value($data['price'], $data['stock']) ?></td>
                            <td>₱<?= get_tax_due($data['price'], $data['stock'], $tax) ?></td>
                        </tr>
                    <?php } ?>    
                </table>
            </div>    
        </main>
    </body>
</html>