<?php
// 応用問題
// FizzBuzz問題【条件分岐の基本練習】

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  // $iを1から50まで順番に回す「for文」ループ
  if ($i % 15 == 0) {
    echo $FizzBuzz . '<br />';
  }else if ($i % 3 == 0) {
    echo $Fizz . '<br />';
  }else if ($i % 5 == 0) {
    echo $Buzz . '<br />';
  }else {
    echo $i . '<br />';
  }
}
// ＊if文＊
// 【基礎構文】
// if ( 条件 ) {
// 真の時に実行される処理
// }else{
// 偽の時に実行される処理
// }
// 【elseif】
// 複数の条件のどれに当てはまるかによって、それぞれ異なる処理を行いたい時に使う



// 二重ループ問題【ネストされたfor文】
// 行の中で列を繰り返すイメージ
for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}
// 外側のループ($i)で「行」を管理
// 内側のループ($j)で「列＝●」を並べる
// 外側のfor ($i = 1; $i < 6; $i++)→縦に5回くり返すループ(つまり5行分の処理)
// 内側のfor ($j = 1; $j < 6; $j++)→横に5つの「●」を表示するループ(1行に5個の●を出力)