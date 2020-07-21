<?php
require_once('menu.php');

// それぞれpriceとimageを追加してください
$juice = new Menu('JUICE',600,'https://lesson/php/juice.png');
$coffee = new Menu('COFFEE',500,'https://lesson/php/coffee.png');
$curry = new Menu('CURRY',900,'https://lesson/php/curry.png');
$pasta = new Menu('PASTA',1200,'https://lesson/php/pasta.png');

$menus = array($juice, $coffee, $curry, $pasta);
?>