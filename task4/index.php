<!-- 4.Зробіть дві сторінки: index.php і test.php. 
Під час заходу на index.php запитайте за допомогою 
форми країну користувача, запишіть її в сесію (форма водночас 
має відправиться на цю саму сторінку). Нехай потім користувач 
зайде на сторінку test.php - виведіть там країну користувача. -->

<?php
session_start();

if (empty($_SESSION['country'])) {
    $country = $_SESSION['country'];
}

if (isset($_POST['submit'])) {
    $country = $_POST['country'];
    $_SESSION['country'] = $_POST['country'];
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
    <nav>
        <ul class="menu">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="test.php">Test</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <h1>Please indicate your country?</h1>

        <form action="index.php" method="post">
            <input type="text" name="country" placeholder="Country" required class="input"><br>
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>

</body>

</html>