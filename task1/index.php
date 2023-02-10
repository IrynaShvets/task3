<!-- 1.Після заходу на сторінку запишіть у сесію текст 'test'. 
Потім поновіть сторінку і виведіть вміст сесії на екран. -->

<?php
session_start();
$_SESSION['test'] = 'test';

$test = 'test';
echo $_SESSION['test'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>
</html>