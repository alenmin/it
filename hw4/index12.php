<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 4-12</title>
</head>
<body>
<?php
/*
12. Дан GET-параметр date, в который вводится год в формате '2013'. Узнайте, какой это будет год по восточному календарю.
Результат выведите на экран.
*/
?>
<form method="get">
Введите дату в формате ГГГГ:
<input type="text" name="date" size="4" maxlength="4">
</form>
<?php
$date = ($_GET ['date']);
$china = 2697;
$year = $china + $date;
echo $date ." год = ". $year ." по восточному календарю.";
?>
</body>
</html>