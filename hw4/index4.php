<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 4-4</title>
</head>
<body>
<?php

/*
4.Сделайте форму, которая спрашивает у пользователя дату в формате '20131231T12:59:59'. С помощью функций explode и
mktime переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату. Подсказка: explode следует
применить дважды.
*/
?>
<form method="post">
Введите дату в формате ГГГГММДДTЧЧ:ММ:СС (Пример: 20131231T12:59:59):
<input type="text" name="date" size="17" maxlength="17">
</form>
<?php
$dt = ($_POST ['date']);
$a = "T";
$b = "";
$c = str_replace($a, $b, $dt);
$d = str_split($c, 8);
$date = $d[0][0] . $d[0][1] . $d[0][2] . $d[0][3] . ":" . $d[0][4] . $d[0][5] . ":" . $d[0][6] . $d[0][7] . ":" . $d[1];
$elements = explode(":", $date);
$result = date("U, F", mktime(0, 0, 0, $elements[1], $elements[2], $elements[0]));
echo " Дата в формате timestamp и месяц: " . $result;
?>
</body>
</html>