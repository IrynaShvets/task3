<?php
session_start();

// $country = "";

if (isset($_POST['submit'])) {
    $country = $_POST['country'];
    $_SESSION['country'] = $_POST['country'];
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
    <div>
        <p> Country: <?php echo $_SESSION['country'] ?> </p>

        <hr>
    </div>

</body>

</html>