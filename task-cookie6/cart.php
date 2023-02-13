<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <a href="index.php">
            <h2 class="logo">SHOP</h2>
        </a>
        <nav>
            <ul class="navbar">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Головна</a>
                </li>
                <li class="nav-item">
                    <a href="cart.php" class="nav-link">Кошик
                        <?php if (isset($_SESSION['cart'])) : ?>
                            <?php echo count($_SESSION['cart']); ?>
                        <?php endif; ?>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div>
            <a href="empty-cart.php" class="btn">Empty Cart</a>

            <?php
            if (isset($_SESSION['cart'])) :
                $i = 1;
                $sum = [];
                foreach ($_SESSION['cart'] as $cart) :
                    $sumProduct = $cart['price'] * $cart['quantity'];
                    array_push($sum, $sumProduct);
                    $sumArray = array_sum($sum);
            ?>
                    <div>
                        <p><?php echo $i; ?>. </p>
                        <p> Номер товару: <?= $cart['id']; ?></p>
                        <p> Сума: <?= $sumProduct ?></p><?php ?>
                        <input type="number" value="<?= $cart['quantity']; ?>" name="quantity" min="1">
                    </div>
                <?php
                    $i++;
                endforeach;
                ?>
                <p> Загальна сума до оплати: <?= $sumArray; ?></p>
            <?php
            endif;
            ?>
        </div>
    </main>
    <footer class="footer">
        <div>
            <p>
                &copy; 2023. All rights reserved. The information presented on the site is not a public offer.
            </p>
        </div>
    </footer>
</body>

</html>