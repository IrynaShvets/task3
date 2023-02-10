<?php
session_start();

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

    <div class="container">
        <h1> Register form</h1>

        <form>
            <input type="text" name="name" placeholder="Name" class="input"><br>
            <input type="text" name="city" value="<?php echo $_SESSION['city'] ?>" placeholder="City" required class="input"><br>
            <input type="number" name="age" value="<?php echo $_SESSION['age'] ?>" placeholder="Age" required class="input"><br>
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>

</body>

</html>