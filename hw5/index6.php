<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 5-6</title>
</head>
<body>
<?php
/*
6.Спросите у пользователя с помощью мультиселекта, какие из языков он знает: html, css, php, javascript.
Выведите на экран те языки, которые знает пользователь.
*/
echo "6. Какие языки вы знаете? <br />";
?>
<form action="index5-6.php" method="post">
    <select multiple name="web">
        <option value="1">html</option>
        <option value="2">css</option>
        <option value="3">php</option>
        <option value="4">js</option>
    </select>
    <br><br>
    <input type="submit" value="Отправить">
</form>
<?php
print_r ($_POST);
?>
</body>
</html>