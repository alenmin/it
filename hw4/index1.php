<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 4-1</title>
</head>
<body>
<?php

/*
1.Создайте форму, сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год.
1.1 ( +1 ) Сделать проверку на формат и количество введенных значений. Если есть ошибка уведомить об этом пользователя.
*/
echo "1. ";
?>
<form method="post">
Введите год от 1970 до 2038(4 цифры):
<input type="text" name="year" size="3" maxlength="4">
<?php
$year = ($_POST ['year']);
    if ($year >= 1970 && $year <= 2038) {
        $y = date("L", mktime(0, 0, 0, 01, 01, $year));
        if ($y == 1) {
            echo " Високостный год.";
        } elseif ($y == 0) {
            echo " Не високостный год.";
        }
    } elseif ($year <= 1969 || $year >= 2039 || $year == "Array") {
        echo "Введите корректную дату.";
    } else {unset ($year);}

?>
</body>
</html>