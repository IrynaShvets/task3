<!-- 4 Запитайте дату народження користувача. При наступному заході 
на сайт напишіть скільки днів залишилося до його дня народження. 
Якщо сьогодні день народження користувача - привітайте його! -->

<?php

if (isset($_POST["submit"])) {
    setcookie("name", $_POST["birthday"], time() + 60 * 60 * 24 * 30 * 12, "/", "", 0);
}

if (isset($_POST['submit'])) {
    if (isset($_COOKIE["name"])) {
        $date = $_POST["birthday"];

        $birthdayMonth = date('m', strtotime($date));
        $birthdayDay = date('d', strtotime($date));

        $currentYear = date('Y');
        $currentMonth = date('m');
        $currentDay = date('d');

        if ($birthdayMonth === $currentMonth && $birthdayDay >= $currentDay) {
            $diff = $birthdayDay - $currentDay;
            if ($diff === 0) {
                echo 'Вітаємо вас з днем народження.';
            }
            if ($diff !== 0) {
                echo 'Вам залишилося до вашого дня народження ' . $birthdayDay - $currentDay . ' днів.';
            }
        }
        if (($birthdayMonth === $currentMonth && $birthdayDay < $currentDay) || ($birthdayMonth < $currentMonth)) {
            $nextBirth = ($currentYear + 1) . '-' . $birthdayMonth . '-' . $birthdayDay;
            $nextBirthTs = strtotime($nextBirth);
            $diff = $nextBirthTs - time();
            if ($diff !== 0) {
                echo 'Вам залишилося до вашого дня народження ' . floor($diff / (60 * 60 * 24)) . ' днів.';
            }
        }

        if ($birthdayMonth > $currentMonth) {
            $nextBirth = $currentYear . '-' . $birthdayMonth . '-' . $birthdayDay;
            $diff = strtotime($nextBirth) - time();
            if ($diff !== 0) {
                echo 'Вам залишилося до вашого дня народження ' . floor($diff / (60 * 60 * 24)) . ' днів.';
            }
        }
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

    <div class="container">
        <h1>Будь ласка, введіть вашу дату народження.</h1>

        <form action="index.php" method="post">
            <input type="text" name="birthday" placeholder="Birthday" class="input"><br>
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>

    </div>

</body>

</html>