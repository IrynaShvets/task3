<!-- 2 Покажіть користувачеві банер із кнопкою 'Не показувати більше!'. 
Якщо він натисне на цю кнопку - не показуйте йому банер протягом місяця. + 60 * 60 * 24 * 30-->

<?php
setcookie('name', 'hidden', time() + 60 * 60 * 24 * 30);
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

  <div class="banner">
    <form method="get" action="index.php">
      <input type="submit" <?php
                            if (isset($_GET['submit'])) {
                              if (isset($_COOKIE["name"])) {
                                echo $_COOKIE["name"];
                              }
                            } ?> name="submit" value="Не показувати більше!">
    </form>
  </div>

</body>

</html>