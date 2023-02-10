<?php
session_start();

if (isset($_SESSION['city'])) {
    $city = $_SESSION['city'];
}

if (isset($_SESSION['age'])) {
    $age = $_SESSION['age'];
}

if (isset($_POST['submit'])) {
    $city = $_POST['city'];
    $age = $_POST['age'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['age'] = $_POST['age'];
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
        <li>
           <a href="logout.php">Logout</a>
        </li>
    </ul>


    <div class="container">
        <h1> Register form</h1>

        <form>
            <input type="text" name="name" placeholder="Name" class="input"><br>
            <input type="text" name="city" value="<?php if (isset($_SESSION['city'])) {echo $_SESSION['city'];}?>" placeholder="City" class="input"><br>
            <input type="number" name="age" value="<?php if (isset($_SESSION['age'])) {echo $_SESSION['age'];}?>" placeholder="Age" class="input"><br>
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>

</body>

</html>