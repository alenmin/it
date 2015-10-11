<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 5-9</title>
</head>
<body>
<?php
/*
9.Сделайте функцию, которая создает textarea. Функция должна иметь
следующие параметры: name, value, placeholder.
*/
echo "9. Функция для textarea <br />";

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