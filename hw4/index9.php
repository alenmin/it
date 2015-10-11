<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 4-9</title>
</head>
<body>
<?php
/*
9.Передайте в адресную строку GET-параметр date, в котором будет записана дата в формате '20131231'.
Преобразуйте ее в формат '31.12' (день.месяц).
*/
?>
<form method="get">
Введите дату в формате ГГГГММДД:
<input type="text" name="date" size="8" maxlength="8">
</form>
<?php
$date = ($_GET ['date']);
$year = $date[0] . $date[1] . $date[2] . $date[3];
$month = $date[4] . $date[5];
$day = $date[6] . $date[7];
echo $day .".". $month;
?>
</body>
</html>