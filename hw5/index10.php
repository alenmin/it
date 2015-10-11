<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 5-</title>
</head>
<body>
<?php

//Модифицируйте функцию из предыдущей задачи так, чтобы она сохраняла значение textarea после отправки.

echo "10. Textarea - сохранение значения после отправки. <br />";

function form_ta ($name, $value, $pl) {
if (($name == false) && ($value == false) && ($pl == false))
{
echo "Функция <b>form()</b> вызвана без параметров. Введите параметры.";
} else {
echo '<form method="post">';
    echo "<textarea rows=10 cols=45 name='$name' value='$value' placeholder='$pl'></textarea><br>";
    echo '<input type="submit" name="enter" value="Enter" >';
    echo '</form>';
}
if (empty($_POST["$value"])) $_POST["$value"] = '';
elseif (empty($_POST["$name"])) $_POST["$name"] = '';
}
form_ta ('text', '', 'Какой-то текст');

?>
</body>
</html>