<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 5-</title>
</head>
<body>
<?php

//8.Модифицируйте функцию из предыдущей задачи так, чтобы она сохраняла значение инпута после отправки.

echo "8. Модифицируйте функцию из предыдущей задачи так, чтобы она сохраняла значение инпута после отправки. <br />";
?>

<?php
function form ($type, $name, $value, $pl)
{
    if (($type == false) && ($name == false) && ($value == false) && ($pl == false)) {
        echo "Функция <b>form()</b> вызвана без параметров. Введите параметры.";
    } else {
        echo '<form method="post">';
        echo "<input type='$type'  name='$name' value='$value' placeholder='$pl' >";
        echo '<input type="submit" name="enter" value="Enter" >';
        echo '</form>';
        if (isset($_COOKIE['rec'])) {
            if (!empty($_POST["$value"])) {
                $_COOKIE['rec'] = $_POST["$value"];
            } elseif (!empty($_POST["$name"])) {
                    $_COOKIE['rec'] = $_POST["$name"];
            } else {$_COOKIE['rec'] = '';}
        } else { $_COOKIE['rec'] = '';}
        setcookie("rec","val");
        }
}
form ('text', 'userId', '' , '');
$result = ($_COOKIE['rec']);
echo $_COOKIE['rec'];
echo "<br>";
echo $result . "<br>";
print_r ($_POST);
echo "<br>";
?>

</body>
</html>