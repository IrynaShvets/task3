<!-- 9  Додайте в попереднє завдання сторінку logout.php. 
При заході на неї руйнуйте сесію користувача. -->

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
        <li>
            <a href="logout.php">Logout</a>
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