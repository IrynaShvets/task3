 <!-- 1 Зробіть лічильник відвідування сайту відвідувачем. 
Щоразу, заходячи на сайт, він має бачити напис: 'Ви відвідали наш сайт % разів!'. -->

<?php

if(!isset($_COOKIE['visit'])) {
    echo "Вітаємо вас вперше на нашому сайті!";
}
    setcookie('visit', time(), time() + 1000);

if ( isset($_COOKIE['visit']) ) {
    echo "Ви відвідали наш сайт {$_COOKIE['visit']} разів.";
    setcookie('visit', (int)$_COOKIE['visit'] + 1, time() + 1000 );
} else {
    setcookie('visit', 1, time() + 1000 );
}

?>
