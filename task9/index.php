<!-- 9  Додайте в попереднє завдання сторінку logout.php. 
При заході на неї руйнуйте сесію користувача. -->

<?php
session_start();

$_SESSION['city'] = '';
$_SESSION['age'] = '';

if ($_SESSION['city']) {
    $city = $_SESSION['city'];
    $age = $_SESSION['age'];
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
                <a href="?name=home">Home</a>
            </li>
            <li>
                <a href="?name=form">Form</a>
            </li>
            <li>
                <a href="?name=logout">Logout</a>
            </li>
        </ul>
    </nav>


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

            case 'logout':
                require_once "logout.php";
                break;
        }
        ?>
    </div>

    <?php if ($site_name === 'home') { ?>
        <div class="container">
            <h1>Please fill in form</h1>

            <form action="form.php" method="post">
                <input type="text" name="city" placeholder="City" required class="input"><br>
                <input type="number" name="age" placeholder="Age" required class="input"><br>
                <input type="submit" name="submit" value="Submit" class="btn">
            </form>

        </div>
    <?php } ?>

</body>

</html>