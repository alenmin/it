<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 4-11</title>
</head>
<body>
<?php
/*
11. Сделайте форму с одним полем ввода, в которое пользователь вводит год. Найдите все пятницы 13е
в этом году. Результат выведите в виде списка дат.
*/
?>
<form method="get">
Введите дату в формате ГГГГ:
<input type="text" name="date" size="4" maxlength="4">
</form>
<?php
$year = ($_GET ['date']);
for ($month = 1; $month <= 12; $month++) {     // Перебираем все месяцы.
    mktime(0, 0, 0, $month, 13, $year);        // Месяцы перебираются, число всегда 13-е, год получаем из формы.
    if (date("l", mktime(0, 0, 0, $month, 13, $year)) == "Friday") {    // Если 13-го числа, заданного года значение даты равно
       echo (date("d. l. M. Y", mktime(0, 0, 0, $month, 13, $year))) ."<br />";    // пятнице, то выводим эти даты.
    }
}
?>
</body>
</html>