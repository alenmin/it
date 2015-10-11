<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 4-7</title>
</head>
<body>
<?php
/*
7.Создайте форму с элементом ввода. При вводе даты прибавьте к дате 31.12.2013 один день. Результат выведите в том же формате.
7.1. ( +1 ) Добавьте к форме два элемента типа radio button которые будут определять формат ввода: dd.mm.YY и YY.mm.dd. В
зависимости от формата ввода должен быть такой же формат вывода.
*/
?>

<form method="post">
Введите дату в формате ДД.ММ.ГГГГ:
<input type="text" name="date" size="9" maxlength="10">
</form>

<?php
$date = ($_POST ['date']);
echo date('d.m.Y', strtotime("$date +1 day"));
?>

</body>
</html>