<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 5-4</title>
</head>
<body>
<?php
/*
Спросите у пользователя его возраст с помощью нескольких radio-кнопок. Варианты ответа сделайте такими:
менее 20 лет, 20-25, 26-30, более 30. Результат выдайте на экран в видет “Ваш возраст в диапазоне <n> лет”
*/
echo "5. Ваш возраст: <br />";
?>
<form action="index5-4.php" method="post">
    <input type="radio" name="age" value="1"> менее 20<br>
    <input type="radio" name="age" value="2"> 20-25<br>
    <input type="radio" name="age" value="3"> 26-30<br>
    <input type="radio" name="age" value="4"> больше 30<br>
    <input type="submit" name="ok" value="Ok">
</form>
<?php
//print_r ($_POST);
if (empty ($_POST['age'])) {
    echo "Нужно выбрать возраст и нажать Ok";
} elseif ($_POST['age'] == 1) {
    echo "Ваш возраст до 20 лет.";
} elseif ($_POST['age'] == 2) {
    echo "Вам от 20 до 25 лет.";
} elseif ($_POST['age'] == 3) {
    echo "Вам от 26 до 30 лет.";
} elseif ($_POST['age'] == 4) {
    echo "Вам за 30.";
}
?>
</body>
</html>