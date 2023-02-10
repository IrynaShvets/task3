<!-- 5.Запишіть у сесію час заходу користувача на сайт. 
Під час оновлення сторінки виводьте скільки секунд тому користувач зайшов на сайт. -->

<?php
session_start();

If (empty($_SESSION['time'])) {
    $_SESSION['time'] = time();
}
$timeRefresh = time() - $_SESSION['time'];
echo $timeRefresh;

?>