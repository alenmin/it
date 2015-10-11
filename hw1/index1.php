<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr</title>
</head>
<body>
<?php
echo "Конструкция if else: <br /><br />";

echo "1. ";//Задание 1
$a = 0;
//$a = 1;
//$a = -3;
if ($a==0) echo "Верно!";
    else
        echo "Неверно!";
echo "<br /><br />";

echo "2. ";//Задание 2
//$a = 0;
$a = 1;
//$a = -3;
if ($a>0) echo "Верно!";
else
    echo "Неверно!";
echo "<br /><br />";

echo "3. ";//Задание 3
//$a = 0;
//$a = 1;
$a = -3;
if ($a<0) echo "Верно!";
else
    echo "Неверно!";
echo "<br /><br />";

echo "4. ";//Задание 4
$a=0;
//$a=1;
//$a=-3;
if ($a>=0) echo "Верно!";
    else echo "Неверно!";
echo "<br /><br />";

echo "5. ";//Задание 5
$a=0;
//$a=1;
//$a=-3;
if ($a<=0) echo "Верно!";
else echo "Неверно!";
echo "<br /><br />";

echo "6. ";//Задание 6
//$a=0;
$a=1;
//$a=-3;
if ($a!=0) echo "Верно!";
else echo "Неверно!";
echo "<br /><br />";

echo "7. ";//Задание 7
$a = 'test';
//$a = "тест";
//$a = 3;
if ($a == 'test') echo "Верно! \$a(test) = test";
else
    echo "Неверно!";
echo "<br /><br />";

echo "8. ";//Задание 8
$a = '1';
//$a = 1;
//$a = 3;
if ($a === '1') echo "Верно! \$a('1') эдентична '1'";
else
    echo "Неверно!";

echo "<br /><br />";
echo "- Работа с empty и isset: <br /><br />";

echo "9. ";//Задание 9 - работа с empty
$a = 0;
//$a = 1;
//$a = -3;
//$a = null;
//$a = true;
//$a = false;
if (empty($a)) echo "Верно! \$a(0; null; false) = Empty";
else
    echo "Неверно!";
echo "<br /><br />";

echo "10. ";//Задание 10 - работа с empty
//$a = 0;
//$a = 1;
//$a = -3;
//$a = null;
$a = true;
//$a = false;
if (!empty($a)) echo "Верно! \$a(!0; !null; !false) = No Empty";
else
    echo "Неверно!";
echo "<br /><br />";

echo "11. ";//Задание 11 - работа с isset
unset($a);
//$a = 0;
//$a = 1;
//$a = -3;
//$a = null;
//$a = true;
$a = false;
if (isset($a)) echo "Верно! \$a(isset) - no 'null'";
else
    echo "Неверно!";
echo "<br /><br />";

echo "12. ";//Задание 12 - работа с isset
unset($a);
//$a = 0;
//$a = 1;
//$a = -3;
$a = null;
//$a = true;
//$a = false;
if (!isset($a)) echo "Верно! \$a(!isset) = 'null'";
else
    echo "Неверно!";
echo "<br /><br />";
echo "- Работа с логическими переменными: <br /><br />";

echo "13. ";//Задание 13
/*$var=true;
//$var=false;
if ($var==true) echo "Верно! \$var = true";
    else echo 'Неверно!';
*/
$var=true;
//$var=false;
 if ($var==true) {echo "Верно! \$var(true) = true";
    } else {echo "Неверно!";}
echo "<br /><br />";

echo "14. ";//Задание 14
//$test=true;
$test=false;
if ($test!=true) echo "Верно! \$test(false) не равна true";
    else echo "Неверно!";
echo "<br /><br />";

echo "- Работа с if-elseif-else:  <br /><br />";

echo "15. ";//Задание 15
unset($a);
//$a=5;
//$a=0;
//$a=-3;
$a=2;
if ($a>0 && $a<5) {echo "Верно!";
    }else{echo "Неверно!";}
echo "<br /><br />";

echo "16. ";//Задание 16
//$a=5;
//$a=0;
$a=-3;
//$a=2;
if (($a==0)||($a==2)) {$a*=10; echo $a;
    }else{$a+=7; echo $a;}
echo "<br /><br />";

echo "17. ";//Задание 17
//$a=1;
//$a=0;
$a=3;
//$a=2;
if (($a!=1)||($a!=3)) {echo "Верно!";
    }else{echo "Неверно!";}
echo "<br /><br />";

echo "18. "; //Задание 18
//$a=0;
$a=1;
//$a=3;
//$b=3;
$b=6;
//$b=5;
if ($a<=1 && $b>=3) {
    echo $a + $b;
    }else{echo "18. Неверно!";}
echo "<br /><br />";

echo "19. "; //Задание 19
//$a=5;
$a=3;
//$a=-3;
//$a=9;
if ($a>0 && $a<5) {$a+=1; echo $a;
    }else{$a+=5; echo $a;}
echo "<br /><br />";

echo "20. "; //Задание 20
$a=3;
$b=7;
if (($a>2 && $a<11)||($b>=6 && $b<14)) {echo $a+=2;
    }else{echo $a+=10;}
echo "<br /><br />";

echo "21. "; //Задание 21
//$lang="ru";
$lang="en";
if ($lang=="ru") {$arr = Array('Пн','Вт','Ср','Чт','Пт','Сб','Вс');
    }elseif ($lang=="en") {$arr = Array('Sn','Mn','Tu','Wn','Th','Fr','St');}
print_r([$arr]);
echo "<br /><br />";

echo "- Конструкция switch-case: <br /><br />";

echo "22. "; //Задание 22
$m="Август";
switch ($m) {
    case "Ярварь":
        echo "Холодно. Январь";
        break;
    case "Февраль":
        echo "Лютый холод! Февраль как никак.";
        break;
    case "Март":
        echo "Орут коты. Март";
        break;
    case "Апрель":
        echo "Если капает капель - значит за окном Апрель";
        break;
    case "Май":
        echo "Май - пора на природу жарить шашлычок!";
        break;
    case "Июнь":
        echo "Июнь - море прогревается!";
        break;
    case "Июль":
        echo "Июль - пора к прибою дикарём!";
        break;
    case "Август":
        echo "Август. Копим денежку на днюху.";
        break;
    case "Сентябрь":
        echo "Сентябрь. Как-то грустно.";
        break;
    case "Октябрь":
        echo "Октябрь - ошалевшие дворники палят по ночам листву и прыгают через костры.";
        break;
    case "Ноябрь":
        echo "Ноябрь. И кто его придумал?";
        break;
    case "Декабрь":
        echo "Ура! Пора Новый Год встречать! И с 1-го по 13-е...";
        break;
}
echo "<br /><br />";

echo "23. "; //Задание 23
$day=25;
switch ($day) {
    case $day>0 && $day<=10:
        echo "Сейчас первая декада";
        break;
    case $day>=11 && $day<=20:
        echo "Сейчас вторая декада";
        break;
    case $day>21 && $day<=31:
        echo "Сейчас третья декада";
        break;
}
echo "<br /><br />";

echo "24. "; //Задание 24
$month=8;
switch ($month) {
    case $month>=1 && $month<=2 || $month==12:
        echo "Зима";
        break;
    case $month>=3 && $month<=5:
        echo "Весна";
        break;
    case $month>=6 && $month<=8:
        echo "Лето";
        break;
    case $month>=9 && $month<=11:
        echo "Осень";
        break;
}
?>
</body>
</html>