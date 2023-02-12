<!-- 3 Запам'ятайте дату останнього відвідування сайту користувачем. 
При заході на сайт напишіть йому, скільки днів він не був на вашому сайті. -->

<?php

setcookie('UserVisit', date('Y-m-d H:i:s'), time() + 60 * 60 * 24 * 1000);

if (isset($_COOKIE['UserVisit'])) {
    $lastVisit = $_COOKIE['UserVisit'];
    setcookie('UserVisitNext', date('Y-m-d H:i:s'), time() + 60 * 60 * 24 * 1000);
    echo "Ви не були на нашому сайті $lastVisit днів." . '<br>';
} else {
    echo "Вітаємо вас вперше на нашому сайті!";
}

if (isset($_COOKIE['UserVisitNext'])) {

    $lastDate = new DateTime($_COOKIE['UserVisit']);
    $currentDate = new DateTime($_COOKIE['UserVisitNext']);
    $interval = $lastDate->diff($currentDate);
    echo $interval->format('Ви не були на нашому сайті %a днів.');

    echo $_COOKIE['UserVisitNext'];
}
?>