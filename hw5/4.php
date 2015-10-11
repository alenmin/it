<?php
/* Сделайте на сайте 5 картинок с товарами. Реализуйте корзину. Под каждой
картинкой должна быть ссылка 'положить в корзину'. По нажатию на эту ссылку этот
товар должен занестись в корзину (сессия), также должна увеличиться общая
сумма, которую должен заплатить пользователь (сумма также должна быть указана
под картинками с товарами). */
function add_product($goods, $tov_id, $value)
{
    if(!array_key_exists($tov_id, $goods)) {
        $goods[$tov_id] = array(
            'count' => 1,
            'sum'   => $value
        );
    } else {
        $goods[$tov_id]['count']++;
        $goods[$tov_id]['sum'] += $value;
    }

    return $goods;
}

session_start();
$prices = array(
    1   => array(
        'title' => 'Мобильный телефон HTC A',
        'price' => 10
    ),
    2   => array(
        'title' => 'Мобильный телефон HTC B',
        'price' => 20
    ),
    3   => array(
        'title' => 'Мобильный телефон HTC C',
        'price' => 30
    ),
    4   => array(
        'title' => 'Мобильный телефон HTC D',
        'price' => 40
    ),
    5   => array(
        'title' => 'Мобильный телефон HTC E',
        'price' => 50
    )
);
$tovars = array();
if (isset($_SESSION['products'])) {
    $tovars = $_SESSION['products'];
}

if (isset($_GET['exit'])) {
    session_destroy();
    header('Location:' . $_SERVER['PHP_SELF']);
}
if (isset($_GET['tov'])) {
    $tov = strip_tags(trim($_GET['tov']));
    $tovars = add_product($tovars, $tov, $prices[$tov]['price']);

    $_SESSION['products'] = $tovars;

    header('Location:' . $_SERVER['PHP_SELF']);
}
header("Content-Type: text/html; charset=utf-8");
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Shop</title>
</head>
<body>
<table border="1" width="70%">
    <tr>
        <td align="center"><img src="tel_1.JPG"/></td>
        <td align="center"><img src="tel_2.JPG"/></td>
        <td align="center"><img src="tel_3.JPG"/></td>
        <td align="center"><img src="tel_4.JPG"/></td>
        <td align="center"><img src="tel_5.JPG"/></td>
    </tr>
    <tr>
        <td align="center">
            Мобильный телефон HTC A<br>
            Цена: 10000 грн
        </td>
        <td align="center">
            Мобильный телефон HTC B<br>
            Цена: 12500 грн
        </td>
        <td align="center">
            Мобильный телефон HTC C<br>
            Цена: 12750 грн
        </td>
        <td align="center">
            Мобильный телефон HTC D<br>
            Цена: 13100 грн
        </td>
        <td align="center">
            Мобильный телефон HTC E<br>
            Цена: 13999 грн
        </td>
    </tr>
    <tr>
        <td align="center">
            <?php
            echo "<a href='?tov=1'>Добавить в корзину</a>";
            ?>
        </td>
        <td align="center">
            <?php
            echo "<a href='?tov=2'>Добавить в корзину</a>";
            ?>
        </td>
        <td align="center">
            <?php
            echo "<a href='?tov=3'>Добавить в корзину</a>";
            ?>
        </td>
        <td align="center">
            <?php
            echo "<a href='?tov=4'>Добавить в корзину</a>";
            ?>
        </td>
        <td align="center">
            <?php
            echo "<a href='?tov=5'>Добавить в корзину</a>";
            ?>
        </td>
    </tr>
</table>
<table border="1" style="margin-top: -350px" align="right" width="20%">
    <tr>
        <td align="center"><img src="tachka.JPG"/></td>
    </tr>
    <?php
    echo "<tr><td align='center'>Ваша корзина: " . "<br />";
    if (!empty($tovars)) {
        $count_tovars = $total_sum = 0;
        foreach ($tovars as $tov_id => $tov) {
            $count_tovars += $tov['count'];
            $total_sum += $tov['sum'];

            echo "<b>" . $prices[$tov_id]['title'] . "</b>: " . $tov['count'] . "<br />";
        }
        echo '</td></tr>';
        echo '<tr><td>';
        echo "Товаров в корзине: " . $count_tovars . "<br />";
        echo "Товаров на сумму: " . $total_sum;
        echo "</td></tr>";
    }
    echo "<tr><td align='center'>";
    echo "<a href='?exit=true'>Очистить корзину</a>";
    echo "</td></tr>"
    ?>
</table>
</body>
</html>