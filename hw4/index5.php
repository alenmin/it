<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 4</title>
</head>
<body>


<?php

//****** Сравнение дат ******

/*
5.Сделайте форму, которая спрашивает две даты в формате '20131231'. Первую дату запишите в переменную $date1, а
вторую в $date2. Сравните, какая из введенных дат больше. Выведите ее на экран.
*/

?>
<form action="index4-5.php" method="post">
Введите 1-ю дату в формате ГГГГММДД:
<input type="text" name="date1" size="8" maxlength="8">
<br>
Введите 2-ю дату в формате ГГГГММДД:
<input type="text" name="date2" size="8" maxlength="8">
<input name="Submit" type=submit value="Сравнить даты">
</form>
<?php
$date1 = ($_POST ['date1']);
$date2 = ($_POST ['date2']);
//date_1 ("U", );
//date_2 ("U")
    if ($date1 > $date2) {
        echo " Дата 1 ($date1) - больше.";
    } else {
        echo " Дата 2 ($date2) - больше.";
    }
?>
</body>
</html>