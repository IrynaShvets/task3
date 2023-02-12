<!-- 5 Реалізуйте вибір кольору шапки сайту користувачем. 
Зробіть кілька кольорів для шапки. Користувач може вибрати один 
із кольорів за допомогою випадаючого списку. Цей вибір буде збережено в куки і користувач, 
заходячи на сайт, завжди бачитиме один і той самий колір шапки. Можете замінити колір на повноцінний дизайн. -->

<?php

if (isset($_POST['select'])) {
    setcookie('background', $_POST['select'], time() + 3600);
}

if (isset($_COOKIE['background'])) {
    $backgroundHeader = $_COOKIE['background'];
} else {
    $backgroundHeader = '#90E0EF';
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
    <header class="header" style="background:<?php echo $backgroundHeader; ?>;">
        <h1>Logo</h1>
    </header>

    <form method="post">

        <h2>Оберіть колір шапки сайту: </h2>
        <select name="select" class="select">
            <option value="#90E0EF" class="option">Світло-голубий фон
            <option value="#00B4D8" class="option">Голубий фон
            <option value="#0077B6" class="option">Синій фон
            <option value="#03045E" class="option">Темно-синій фон
        </Select>

        <input type="submit" value="submit" class="btn" />

    </form>
</body>

</html>