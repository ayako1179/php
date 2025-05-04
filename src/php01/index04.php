<?php
// 算術演算子
$a = 15;
$b = 3;
$c = 10;

$answer1 = $a + $b;
$answer2 = $a - $b;
$answer3 = $a * $b;
$answer4 = $a / $b;
$answer5 = $a % $c;

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $answer3;
echo "<br />";
echo $answer4;
echo "<br />";
echo $answer5;
echo "<br />";


// 複合演算子
$a = 15;
$b = 3;
$c = 10;
$d = 5;

$a = $b;
// $aに$bの値を代入
$c += $d;
// $cに$dの値を加算して代入
// $c(15)=$c(10)+$d(5)

echo "<br />";
echo $a;
echo "<br />";
echo $c;
echo "<br />";


// 比較演算子
// 正しいときは1が返ってくる
$e = 20;
$f = 5;
// 変数の定義

echo "<br />";
echo ($e > $b);
// $eが$fより多い時にTRUE
echo "<br />";


// 論理演算子
// Q：比較演算子と論理演算子を用いて$eが10より大きいかつ30より小さいことが正しいかechoを用いて出力する
$e = 20;
$f = 5;

echo ($e > 10 && $e < 30);
// &&→左と右が共にTRUEの場合にTRUE
// 正しい時は1が返ってくる
echo "<br />";


// 加算子と減算子(インクリメント/デクリメント)
$g = $h = 10;
$i = $j = 5;

echo "<br />";
echo ++$g;
echo "<br />";
echo $h++;
echo "<br />";
echo --$i;
echo "<br />";
echo $j--;
echo "<br />";
