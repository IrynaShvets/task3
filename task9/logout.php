<?php
session_start();

$_SESSION = [];

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

var_dump(session_destroy());

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

    <nav>
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
    </nav>

    <div class="container">
        <h1>Logout</h1>
    </div>
    
</body>

</html>
