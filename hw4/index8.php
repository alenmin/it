<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 4-8</title>
</head>
<body>
<?php
/*
8.Создайте форму с элементом ввода. В поле вводится дата в формате '20131231'. Прибавьте к этой дате
1) 2 дня,
2) 1 месяц и 3 дня,
3) 1 год.
Отнимите от этой даты 3 дня.
Результат выведите на экран.
*/
?>
<form method="post">
Введите 1-ю дату в формате ГГГГММДД:
<input type="text" name="date" size="8" maxlength="8">
</form>

<?php
$date = ($_POST ['date']);
echo "Ваша дата + 2 дня: ". date ('Ymd', strtotime("$date +2 day")) ."<br />";
echo "Ваша дата + 1 месяц и 3 дня: ". date ('Ymd', strtotime("$date +1 month, +3 day")) ."<br />";
echo "Ваша дата + 1 год: ". date('Ymd', strtotime("$date +1 year")) ."<br />";;
echo "Ваша дата - 3 дня: ". date ('Ymd', strtotime("$date -3 day"));
?>
</body>
</html>