<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

$totalPrice = 0;
foreach ($prices as $price) {
  $totalPrice += $price;
}
echo '合計金額は'.$totalPrice.'円です';
echo'<br>';
// この下にコードを書いてください
$maxPrice = 0;
foreach ($prices as $price) {
  if ($price > $maxPrice){
    $maxPrice = $price;
  } 
}
echo '最高価格は'.$maxPrice.'円です';
?>