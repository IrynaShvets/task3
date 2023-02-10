<!-- 2.Нехай у вас є дві сторінки сайту. Запишіть на першій сторінці що-небудь у сесію, 
а потім виведіть це під час заходу на іншу сторінку. -->

<?php
session_start();
$_SESSION['name'] = 'Ivan';

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
            <a href="?name=session">Session</a>
        </li>
    </ul>

    <div class="content">
        <?php

         $site_name = $_GET['name']??'0';
         switch ($site_name) {
            case 'home':
                require_once "index.php";
                break;
            
            case 'session':
                require_once "session.php";
                break;
            
                default:
                echo "Сторінка за замовчуванням";
         }
    ?>
    </div>
    
    
</body>
</html>