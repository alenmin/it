<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 4-10</title>
</head>
<body>
<?php
/*
10. Дан GET-параметр date, в который вводится год в формате '2013'. Посчитайте сколько воскресений в этом году приходится
на первое число месяца.
*/
?>
<form method="get">
Введите дату в формате ГГГГ:
<input type="text" name="date" size="4" maxlength="4">
</form>
<?php
$year = ($_GET ['date']);
$counter = 0;                                  // Устанавливаем счетчик в ноль.
    for ($month = 1; $month <= 12; $month++) { // Перебираем все месяцы.
        mktime(0, 0, 0, $month, 1, $year);     // Месяцы перебираются, число всегда 1-е, год получаем из формы.
        if (date("l", mktime(0, 0, 0, $month, 1, $year)) == "Sunday") {  // Если 1-го числа, заданного года значение даты равно
            $counter++;                                                  // воскресенью, то увеличиваем счетчик на 1.
        }
    }
echo "Воскресений в заданном году: ". $counter;
?>
</body>
</html>