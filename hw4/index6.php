<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 4-6</title>
</head>
<body>
<?php
/*
6.Сделайте форму, которая спрашивает дату-время в формате '20131231T12:13:59'. С помощью функции strtotime
преобразуйте ее в формат '12:13:59 31.12.2013'.
*/
?>

<form method="post">
Введите дату в формате ГГГГММДДTЧЧ:ММ:СС (Пример: 20131231T12:13:59):
<input type="text" name="date" size="17" maxlength="17">
</form>

<?php
$dt = ($_POST ['date']);
echo date('H:i:s d.m.Y', strtotime("$dt") );
?>
</body>
</html>