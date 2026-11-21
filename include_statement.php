<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>The Candy Store</title><!-- Using include statements to load navigation and footer -->
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <?php include 'nav.php'; ?>

        <h2>Welcome to the Candy Store</h2>
        <p>A wide selection of delicious candy handmade in our kitchen, check out our daily specials!</p>

        <?php include 'candy_offer.php'; ?>
        <?php include 'footer.php'; ?>
    </body>
</html>
