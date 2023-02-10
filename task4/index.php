<!-- 4.Зробіть дві сторінки: index.php і test.php. 
Під час заходу на index.php запитайте за допомогою 
форми країну користувача, запишіть її в сесію (форма водночас 
має відправиться на цю саму сторінку). Нехай потім користувач 
зайде на сторінку test.php - виведіть там країну користувача. -->

<?php
session_start();
$_SESSION['country'] = '';

if ($_SESSION['country']) {
    $country = $_SESSION['country'];
}

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
    <ul class="menu">
        <li>
            <a href="?name=home">Home</a>
        </li>
        <li>
            <a href="?name=test">Test</a>
        </li>
    </ul>

    <div class="content">
        <?php

        $site_name = $_GET['name'] ?? '0';
        switch ($site_name) {
            case 'home':
                require_once "index.php";
                break;

            case 'test':
                require_once "test.php";
                break;

            default:
                echo "Сторінка за замовчуванням";
        }
        ?>
    </div>

    <?php if ($site_name === 'home') { ?>
        <div class="container">
            <h1>Please indicate your country?</h1>

            <form action="test.php" method="post">
                <input type="text" name="country" placeholder="Country" required class="input"><br>
                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
        </div>
    <?php } ?>

</body>

</html>