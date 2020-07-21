<?php
require_once('menu.php');

$juice = new Menu('JUICE', 600, 'https://lesson/php/juice.png');
$coffee = new Menu('COFFEE', 500, 'https://lesson/php/coffee.png');
$curry = new Menu('CURRY', 900, 'https://lesson/php/curry.png');
$pasta = new Menu('PASTA', 1200, 'https://lesson/php/pasta.png');

// $juiceに対して数値の2を引数としてsetOrderCountメソッドを呼び出してください
$juice -> setOrderCount(2);

$menus = array($juice, $coffee, $curry, $pasta);

?>