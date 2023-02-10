<!-- 3.Зробіть лічильник оновлення сторінки користувачем. 
Дані зберігайте в сесії. Скрипт має виводити на екран кількість оновлень. 
При першому заході на сторінку він має вивести повідомлення про те, 
що ви ще не оновлювали сторінку. -->

<?php

session_start();
$_SESSION['refresh'] = $_SESSION['refresh'] ?? 0;

if (isset($_SESSION['refresh'])) {
    echo $_SESSION['refresh'] += 1;
} 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>

<body>
    <h3>
        <?php
        if (!isset($_SESSION['refresh'])) { ?>
            Ви ще не оновлювали сторінку.
        <?php
        } ?>

    </h3>
</body>

</html>