<html>
<head>
    <meta charset="utf-8">
    <title>Minaiev Alexandr</title>
</head>
<body>
<?php
echo "- Основы языка: <br /><br />";

echo "1. "; //Задание 1
$a=3; echo $a;
echo "<br /><br />";

echo "2. "; //Задание 2
$a=10; $b=2;
echo $a+$b."; ";
echo $a-$b."; ";
echo $a*$b."; ";
echo $a/$b;
echo "<br /><br />";

echo "3. "; //Задание 3
$c=15; $d=2;
echo $result=$c+$d;
echo "<br /><br />";

echo "4. "; //Задание 4
$a=10; $b=2; $c=5; echo $a+$b+$c;
echo "<br /><br />";

echo "5. "; //Задание 5
$a=17; $b=10;
$c=$a-$b;
$d=7;
echo $d+$c;
echo "<br /><br />";

echo "6. "; //Задание 6
$text="Привет, Мир!";
echo $text;
echo "<br /><br />";

echo "7. "; //Задание 7
$text1="Привет, "; $text2="Мир!";
echo $text1 . $text2;
echo "<br /><br />";

echo "8. "; //Задание 8
$text = "Mama mila ramu!";
echo $text{0};
echo $text{1};
echo $text{2};
echo $text{3};
echo $text{4};
echo $text{5};
echo $text{6};
//echo $text{7};
echo $text{8};
echo $text{9};
//echo $text{10};
echo $text{11};
echo $text{12};
echo $text{13};
echo $text{14};
echo $text{15};
echo "<br /><br />";

echo "9. "; //Задание 9
echo $game="Putewestvennik <br />";
echo $game{4};
echo $game{5};
echo $game{6};
echo $game{7}." (шест) <br />";
echo $game{8};
echo $game{9};
echo $game{10};
echo $game{12};
echo $game{13}." (веник) <br /><br />";

echo "10. "; //Задание 10
$x=5; echo $x*=$x;
echo "<br /><br />";

echo "- Присваивание: <br /><br />";

echo "1. "; //Задание 1
$var=3;
$var+=5;
$var*=10;
echo $var;
echo "<br /><br />";

echo "- Работа с массивами: <br /><br />";

echo "1. "; //Задание 1
$arr=array('joomla', 'wordpress', 'netcat');
echo var_dump($arr);
echo "<br /><br />";

echo "2. "; //Задание 2
$arr=array('joomla', 'wordpress', 'netcat');
echo $arr[0]." ";
echo $arr[1]." ";
echo $arr[2]."<br /><br />";

echo "3. "; //Задание 3
$arr=array('html', 'css', 'php');
echo $arr[0].", ";
echo $arr[1].", ";
echo $arr[2]."<br /><br />";

echo "4. "; //Задание 4
$arr=Array('2', '5', '3', '9');
echo $result=$arr[0]*$arr[1]+$arr[2]*$arr[3]."<br /><br />";

echo "5. "; //Задание 5
$arr=Array('a', 'b', 'c', 78);
echo var_dump($arr)."<br />";
unset($arr);
$arr[]='x';
$arr[]='y';
$arr[]='z';
$arr[]=55;
echo var_dump($arr)."<br /><br />";

echo "6. "; //Задание 6
$arr=array('Я', 'учу', 'PHP', '!');
echo $arr[0]."  ";
echo $arr[1]."  ";
echo $arr[2];
echo $arr[3]."<br /><br />";

echo "7. "; //Задание 7
$arr=array('a', 'b', 'c', 'd', 'e');
echo var_dump($arr)."<br />";
$var=$arr[1];
$arr[1]=$arr[2];
$arr[2]=$var;
echo var_dump($arr)."<br /><br />";

echo "8. "; //Задание 8
$arr=array('a', 'b', 'c', 'd','e');
echo var_dump($arr)."<br />";
$var=$arr[4];
$arr[4]=$arr[0];
$arr[0]=$var;
$var=$arr[3];
$arr[3]=$arr[1];
$arr[1]=$var;
echo var_dump($arr)."<br /><br />";

echo "- Ассоциативные массивы: <br /><br />";

echo "9. "; //Задание 9
$arr = array('text'=>'текст!', 1=>'125', 'key'=>'element');
var_dump($arr);
echo "<br /><br />";

echo "10. "; //Задание 10
$arr = array('Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$');
echo "Зарплата Пети: $arr[Петя]. Зарплата Коли: $arr[Коля].";
echo "<br /><br />";

echo "11. "; //Задание 11
$arr=array( 'I'=>'Я', 'study'=>'учу', 'php'=>'PHP', 'sign'=>'!');
echo "$arr[I] $arr[study] $arr[php]$arr[sign]";
echo "<br /><br />";

echo "- Многомерные массивы: <br /><br />";
echo "12. "; //Задание 12
$arr = array(
    'cms'=>array('joomla','wordpress', 'drupal'),
    'colors'=>array('blue'=>'голубой','red'=>'красный', 'green'=>'зеленый')
);
echo $arr['cms'][0].", ".$arr['cms'][2].", ".$arr['colors']['green'].", ".$arr['colors']['red'];
echo "<br /><br />";

echo "13. <br />"; //Задание 13
$eng=Array(
    'ru'=>array('Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'),
    'en'=>array('Sun', 'Mon', 'Tues', 'Wed', 'Thu', 'Fri', 'Sat')
);
foreach($eng['ru'] as $key => $value)
{echo "[$key] ", $value, "<br />";}
echo "<br />";
foreach($eng['en'] as $key => $value)
{echo "[$key] ", $value, "<br />";}
echo "<br /><br />";

echo "- Работа с типами переменных: <br /><br />";
echo "14. "; //Задание 14
$var = array('joomla','wordpress', 'drupal');
$var1 = 'привет!';
$var2 = 23;
$var3 = '23';
$var4 = true;
$var5 = 'true';
$var6 = 2.5;
$var7 = null;
echo "<br />";
echo gettype($var)."<br />";
echo gettype($var1)."<br />";
echo gettype($var2)."<br />";
echo gettype($var3)."<br />";
echo gettype($var4)."<br />";
echo gettype($var5)."<br />";
echo gettype($var6)."<br />";
echo gettype($var7);

?>
</body>
</html>