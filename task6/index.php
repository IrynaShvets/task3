<!-- 6.Запитайте у користувача email за допомогою форми. 
Потім зробіть так, щоб в іншій формі (поля: ім'я, прізвище, пароль, email) 
при її відкритті поле email було автоматично заповнено. -->

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
        <h1>Please indicate your email</h1>

        <form action="form.php" method="post">
            <input type="email" name="email" placeholder="Email" required class="input"><br>
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>

    </div>

</body>

</html>