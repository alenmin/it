<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 5-2</title>
</head>
<body>
<?php
/*
2.Спросите у пользователя, какие из языков он знает: html, css, php, javascript. Выведите на экран те языки,
которые знает пользователь. Если пользователь не отметил ни один язык — выведите на экран сообщение об этом.
*/
echo "2. Какие языки вы знаете?";
?>
<form action="index5-2.php" method="post">
    <input type="checkbox" name="1" value="html">html<br>
    <input type="checkbox" name="2" value="css">css<br>
    <input type="checkbox" name="3" value="php">php<br>
    <input type="checkbox" name="4" value="javascript">javascript<br>
    <input type="submit" value="Enter">
</form>
<?php
//print_r ($_POST);
if (empty($_POST)) {
    echo "Вы не выбрали ни один язык... Чё делать будем?";
}else {
    echo "Вы знаете: <br />";
    foreach ($_POST as $key => $value) {
        echo "- <b>". $value ."</b><br /> ";
    }
    echo "И это круто!";
}
?>
</body>
</html>