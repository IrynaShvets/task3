<!-- 3 Запам'ятайте дату останнього відвідування сайту користувачем. 
При заході на сайт напишіть йому, скільки днів він не був на вашому сайті. -->

<?php
$current = date('Y-m-d H:i:s');
setcookie('last', $current, time() + 60 * 60 * 24 * 1000);

if (isset($_COOKIE['last'])) {
    echo "Теперішній час";
    echo $current . '<br>';
    echo "Минулий час";
    echo $_COOKIE['last'] . '<br>';

    $lastYear = date('Y', strtotime($_COOKIE['last']));
    $lastMonth = date('m', strtotime($_COOKIE['last']));
    $lastDay = date('d', strtotime($_COOKIE['last']));
    $lastHour = date('H', strtotime($_COOKIE['last']));
    
    $currentYear = date('Y');
    $currentMonth = date('m');
    $currentDay = date('d');
    $currentHour = date('H');

    if ($lastDay <= $currentDay && $currentYear === $lastYear && $currentMonth === $lastMonth) {
        $diffDays = $currentDay - $lastDay;
        $diffHours = $currentHour - $lastHour;
        if ($diffHours < 24) {
            echo 'Ви відвідували наш сайт ' . $diffDays . ' днів тому.' . '<br>';
        }
        if (($diffHours + $lastHour) === 24) {
            $countDays = $diffDays + 1;
            echo 'Ви відвідували наш сайт ' . $countDays . ' днів тому.' . '<br>';
        }
    }

    if ($lastDay <= $currentDay && $currentYear === $lastYear && $currentMonth > $lastMonth) {
        $diffMonths = ($currentMonth - $lastMonth) * 30;
        $diffDays = $currentDay - $lastDay;
        $diffHours = $currentHour - $lastHour;
        $diff = $diffMonths + $diffDays;
        if ($diffHours < 24) {
            echo 'Ви відвідували наш сайт ' . $diff . ' днів тому.' . '<br>';
        }
        if (($diffHours + $lastHour) === 24) {
            $countDays = $diff + 1;
            echo 'Ви відвідували наш сайт ' . $countDays . ' днів тому.' . '<br>';
        }
    }

    if ($lastDay <= $currentDay && $currentYear > $lastYear && $currentMonth > $lastMonth) {
        $diffYears = ($currentYear - $lastYear) * 365;
        $diffMonths = ($currentMonth - $lastMonth) * 30;
        $diffDays = $currentDay - $lastDay;
        $diffHours = $currentHour - $lastHour;
        $diff = $diffMonths + $diffDays + $diffYears;
        if ($diffHours < 24) {
            echo 'Ви відвідували наш сайт ' . $diff . ' днів тому.' . '<br>';
        }
        if (($diffHours + $lastHour) === 24) {
            $countDays = $diff + 1;
            echo 'Ви відвідували наш сайт ' . $countDays . ' днів тому.' . '<br>';
        }
    }

    //верхній варіант чи нижній???
    // $lastDate = new DateTime($_COOKIE['last']);
    // $currentDate = new DateTime($current);
    // $interval = $lastDate->diff($currentDate);
    // echo $interval->format('Ви не були на нашому сайті %a днів.');

} else {
    echo "Вітаємо вас вперше на нашому сайті!";
}

?>