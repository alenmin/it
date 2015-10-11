<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 5-7</title>
</head>
<body>
<?php
/*
Сделайте функцию, которая создает инпут type text или password.
Функция должна иметь следующие параметры: type, name, value, placeholder.
*/
echo "7. Работа функции для создания форм. <br />";
?>

<?php
function form ($type, $name, $value, $pl)
{
    if (($type == false) && ($name == false) && ($value == false)
        && ($pl == false)
    ) {
        echo "Функция <b>form()</b> вызвана без параметров. Введите параметры.";
    } else {
        echo '<form method="post">';
        echo "<input type='$type'  name='$name' value='$value' placeholder='$pl' >";
        echo '<input type="submit" name="enter" value="Enter" >';
        echo '</form>';
    }
    if (empty($_POST["$value"])) $_POST["$value"] = '';
    elseif (empty($_POST["$name"])) $_POST["$name"] = '';
}
form ('text', '', '', '"Какой-то текст"');

?>
</body>
</html>