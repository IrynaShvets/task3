<!-- 6 * Завдання підвищеної складності
Зробіть на сайті 5 картинок із товарами. Реалізуйте кошик. 
Під кожною картинкою має бути посилання 'Покласти в кошик'. 
Після натискання на це посилання цей товар має занестися в кошик (сесія), 
також має збільшитися загальна сума, яку має заплатити користувач 
(сума також має бути вказана під картинками з товарами). -->

<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $price = $_GET['price'];
    
    if (!empty($_SESSION['cart'])) {
      $arr = array_column($_SESSION['cart'], 'id');
     
      if (in_array($id, $arr)) {
        $_SESSION['cart'][$id]['quantity'] += 1;
      } else {
        $item = [
          'id' => $_GET['id'],
          'price' => $_GET['price'],
          'quantity' => 1
        ];
        $_SESSION['cart'][$id] = $item;
      }
    } else {
      $item = [
        'id' => $_GET['id'],
        'price' => $_GET['price'],
        'quantity' => 1
      ];
      $_SESSION['cart'][$id] = $item;
    }
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
    <header class="header">
        <a href="index.php"><h2 class="logo">SHOP</h2></a>
        <nav>
        <ul class="navbar">
          <li class="nav-item">
            <a  href="index.php" class="nav-link">Головна</a>
          </li>
          <li class="nav-item">
            <a href="cart.php" class="nav-link">Кошик 
          <?php if (isset($_SESSION['cart'])) : ?>
            <?php echo count($_SESSION['cart']);; ?>
          <?php endif; ?>
          </a>
          </li>
        </ul>
        </nav>
    </header>
    <main>
        <h1 class="title">Ласкаво просимо до нашого магазину</h1>
        <ul class="list">
            <li class="item">
                <img class="image" src="https://i.gyazo.com/da1cfd20878c36a3a53d5b9b4caf36d9.png" alt="mobile">
                <div class="wrapper">
                    <h3 class="title">Apple iPhone</h3>
                    <p class="text">Ціна: 22000 грн.</p>
                    <a href="index.php?id=1&price=22000&title=AppleiPhone&image=https://i.gyazo.com/da1cfd20878c36a3a53d5b9b4caf36d9.png" class="btn">Покласти в кошик</a>
                </div>
            </li>
            <li class="item">
                <img class="image" src="https://i.gyazo.com/3ccedd635e88c4b513aeb7fcb912c5bf.jpg" alt="mobile">
                <div class="wrapper">
                    <h3 class="title">Xiaomi</h3>
                    <p class="text">Ціна: 8000 грн.</p>
                    <a href="index.php?id=2&price=8000&title=Xiaomi&image=https://i.gyazo.com/3ccedd635e88c4b513aeb7fcb912c5bf.jpg" class="btn">Покласти в кошик</a>
                </div>
            </li>
            <li class="item">
                <img class="image" src="https://i.gyazo.com/93ad5f28b424b1839d40cb27638d3445.jpg" alt="mobile">
                <div class="wrapper">
                    <h3 class="title">Mobile Phone</h3>
                    <p class="text">Ціна: 12000 грн.</p>
                    <a href="index.php?id=3&price=12000&title=MobilePhone&image=https://i.gyazo.com/93ad5f28b424b1839d40cb27638d3445.jpg" class="btn">Покласти в кошик</a>
                </div>
            </li>
            <li class="item">
                <img class="image" src="https://i.gyazo.com/d60f1340631b7232355d8796f5c3b04d.jpg" alt="mobile">
                <div class="wrapper">
                    <h3 class="title">Apple iPhone</h3>
                    <p class="text">Ціна: 17000 грн.</p>
                    <a href="index.php?id=4&price=17000&title=AppleiPhone&image=https://i.gyazo.com/d60f1340631b7232355d8796f5c3b04d.jpg" class="btn">Покласти в кошик</a>
                </div>
            </li>
            <li class="item">
                <img class="image" src="https://i.gyazo.com/5e8c597145e34ebb2197339c613e1ad9.jpg" alt="mobile">
                <div class="wrapper">
                    <h3 class="title">Nokia</h3>
                    <p class="text">Ціна: 14000 грн.</p>
                    <a href="index.php?id=5&price=14000&title=Nokia&image=https://i.gyazo.com/5e8c597145e34ebb2197339c613e1ad9.jpg" class="btn">Покласти в кошик</a>
                </div>
            </li>
        </ul>
    </main>
    <footer class="footer">
        <div>
            <p>
                &copy; 2023. All rights reserved. The information presented on the site is not a public offer.
            </p>
         </div>
    </footer>
</body>
</html>