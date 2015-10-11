<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 5-1</title>
</head>
<body>
<?php
/*
Спросите у пользователя имя с помощью формы. Сделайте чекбокс: если он отмечен, то поприветствуйте пользователя,
если не отмечен — попрощайтесь с пользователем.
*/
echo "1. Введите ваше имя и поставте галочку в квадратике:";
?>
<form action="index5-1.php" method="post">
    <input type="text" name="userName" size="20" maxlength="21" />
    <input type="checkbox" name="checkme" value="1" /> <br />
</form>
<?php
//Проверяем чекбокс на существование и форму для ввода имени.
//Выводим сообщения в зависимости от выбора пользовытеля.
if ((!isset($_POST['checkme'])) && (empty($_POST['userName']))) {
    echo "Введите имя.";
} elseif (!isset($_POST['checkme'])) {
    echo "Вы не поставили галочку - прощайте!";
} elseif ((isset($_POST['checkme'])) && (empty($_POST['userName']))) {
    echo "Вы не ввели имя!";
} else {
    echo "Hi, " . $_POST['userName'] . "! Вы всё сделали правильно!";
}
?>
</body>
</html>