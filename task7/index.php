<!-- 7 Запитайте у користувача email за допомогою форми. 
Потім зробіть так, щоб в іншій формі (поля: ім'я, прізвище, пароль, email) 
під час її відкриття поле email було автоматично заповнене. -->

<?php
session_start();

$_SESSION['name'] = '';
$_SESSION['lastName'] = '';
$_SESSION['email'] = '';
$_SESSION['password'] = '';


if ($_SESSION['email']) {
    $email = $_SESSION['email'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>

<body>
    <ul class="menu">
        <li>
            <a href="?name=home">Home</a>
        </li>
        <li>
            <a href="?name=form">Form</a>
        </li>
    </ul>

    <div class="content">
        <?php

        $site_name = $_GET['name'] ?? '0';
        switch ($site_name) {
            case 'home':
                require_once "index.php";
                break;

            case 'form':
                require_once "form.php";
                break;

            default:
                echo "Сторінка за замовчуванням";
        }
        ?>
    </div>
    <?php if ($site_name === 'home') { ?>
        <div class="container">
            <h1>Please indicate your email</h1>

            <form action="form.php" method="post">
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="submit" name="submit" value="Submit">
            </form>

        </div>
    <?php } ?>

</body>

</html>