<!-- 8  Зробіть дві сторінки: index.php і form.php. 
При заході на index.php запитайте за допомогою форми місто і вік користувача. 
На form.php зробіть форму з полями 'Ім'я', 'Вік', 'Місто'. 
При заході на form.php зробіть так, щоб поля 'Вік' і 'Місто' вже були заполнены. -->

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
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="form.php">Form</a>
        </li>
    </ul>

    <div class="container">
        <h1>Please fill in form</h1>

        <form action="form.php" method="post">
            <input type="text" name="city" placeholder="City" class="input"><br>
            <input type="number" name="age" placeholder="Age" class="input"><br>
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>

    </div>

</body>

</html>