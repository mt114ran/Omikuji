<?php 


// GETメソッドで引き渡された入力値を変数に格納
// 1から9までの乱数との絶対値をabs関数で求め変数に格納
// 今回の絶対値の範囲は0から8
$omikuji_num = $_GET['name'];
$lucky_num = abs($omikuji_num - rand(1,9));


// 絶対値0は大吉、１〜３は吉、４〜６は凶、７と８は大凶
// 同値は == を使用
if($lucky_num == 0) {
  // 大吉画面に移動
  header("location: daikichi.html");
}elseif( 1 <= $lucky_num and $lucky_num <= 3 ){
  // 吉画面に移動
  header("location: kichi.html");
}elseif( 4 <= $lucky_num and $lucky_num <= 6 ){
  // 凶画面に移動
  header("location: kyo.html");
}else{
  // 大凶画面に移動
  header("location: daikyo.html");
}
?>