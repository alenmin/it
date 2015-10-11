<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr 4-3</title>
</head>
<body>
<?php
/*
3.Сделайте форму, которая спрашивает дату в формате '20131231'. С помощью функций explode и mktime переведите
эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату.
*/
?>

<form method="post">
Введите дату в формате ГГГГММДД:
<input type="text" name="date" size="8" maxlength="8">

<?php
$date = ($_POST ['date']);
    if ($date >= 19700000 && $date <= 20380000) {
        $date2 = $date[0] . $date[1] . $date[2] . $date[3] . "." . $date[4] . $date[5] . "." . $date[6] . $date[7];
        $elements = explode(".", $date2);
        if (($elements[0] >= 1970 && $elements[0] <= 2038) && ($elements[1] >= 1 && $elements[1] <= 12) && ($elements[2] >= 1 && $elements[2] <= 31)) {
            $result = date("U, M", mktime(0, 0, 0, $elements[1], $elements[2], $elements[0]));
            echo " Дата в формате timestamp и день недели: " . $result;
        } else {
            echo " Введите корректную дату.";
        }
    } else {
        echo " Введите корректную дату.";
    }
?>
</body>
</html>