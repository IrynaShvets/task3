<!-- 3 Запам'ятайте дату останнього відвідування сайту користувачем. 
При заході на сайт напишіть йому, скільки днів він не був на вашому сайті. -->

<?php
$current = date('Y-m-d H:i:s');
if (isset($_COOKIE['last'])) {
    echo "Теперішній час";
    echo $current . '<br>';
    echo "Минулий час";
    echo $_COOKIE['last'] . '<br>';

    $lastDate = new DateTime($_COOKIE['last']);
    $currentDate = new DateTime($current);
    $interval = $lastDate->diff($currentDate);
    echo $interval->format('Ви не були на нашому сайті %a днів.');

} else {
    echo "Вітаємо вас вперше на нашому сайті!";
}

setcookie('last', $current, time() + 60 * 60 * 24 * 1000);
?>