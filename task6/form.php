<?php
session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $_SESSION['email'] = $_POST['email'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Test</title>
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
        <h1> Register form</h1>

        <form>
            <input type="text" name="name" placeholder="Name" class="input"><br>
            <input type="text" name="lastName" placeholder="lastName" class="input"><br>
            <input type="email" name="email" value="<?php
             if (isset($_SESSION['email'])) { 
                 echo $_SESSION['email']; 
             }
            ?>" placeholder="Email" required class="input"><br>
            <input type="password" name="password" placeholder="Password" class="input"><br>
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>

</body>

</html>