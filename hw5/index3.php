<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 5-3</title>
</head>
<body>
<?php
/*
Спросите у пользователя знает ли он PHP с помощью двух radio-кнопок.
Выведите результат на экран. Сделайте так, чтобы по умолчанию один из вариантов был уже отмечен.
*/
echo "3. Вы знаете PHP? <br />";
?>
<form form action="index5-3.php" method="post">
    <input type="radio" name="test" value="1" checked> Да
    <input type="radio" name="test" value="2"> Нет <br>
    <input type="submit" name="enter" value="Enter">
</form>
<?php
if (empty ($_POST)) {
    echo "Сделайте выбор и нажмите Enter";
} elseif ($_POST['test'] == 1) {
    echo "Вы знаете PHP и приняты на работу!";
} else {
    echo "Лузер!";
}
?>
</body>
</html>