<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 4-2</title>
</head>
<body>
<?php

/*
2.Сделайте форму, создайте поле ввода, в которое необходимо вводить дату в формате: '31.12.2013'. С помощью функций
explode и mktime переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату.
*/
?>
<form method="post">
Введите дату в формате ДД . ММ . ГГГГ:
<input type="text" name="date" size="9" maxlength="10">
</form>
<?php
$date = ($_POST ['date']);
$elements = explode (".", $date);
    if (($elements[0] >= 01 && $elements[0] <= 31) && ($elements[1] >= 1 && $elements[1] <= 12) && ($elements[2] >= 1970 && $elements[2] <= 2038)) {
        $result = date("U, l", mktime(0, 0, 0, $elements[0], $elements[1], $elements[2]));
        echo " Дата в формате timestamp и день недели = ". $result;
    } else {
        echo " Введите корректную дату.";
    }
?>
</body>
</html>