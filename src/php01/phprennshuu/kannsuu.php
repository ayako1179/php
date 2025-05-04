<?php
// 関数

// 【戻り値ありの関数】
function addNumber($a, $b)
// addNumberという名前の関数を定義
// $aと$bという2つの引数を受け取る
{
  $add = $a + $b;
  // 足し算
  return $add;
  // 結果を外に返す(これが戻り値)
}

$total = addNumber(2, 3);
// 2と3を渡して関数を呼び出す
// 計算結果の5が戻ってくる
// それを$totalに代入
print $total;
// printは文字や数値を「画面に表示する」ためのPHPの命令(構文)
// 常に「1」を返すという特徴がある

// ざっくりいうと2と3を足して、その計算結果を戻して受け取って表示してる



// 
function exam($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if ($total > 210) {
    echo $total . "点なので合格です";
  }else{
    echo $total . "点なので不合格です";
  }
}
echo (exam(80, 60, 90));



// 三角形・四角形・台形の面積を求める関数を定義する
function getSquareArea($base, $height)
// 長方形または正方形の面積
{
  return $base * $height;
}
function getTriangleArea($base, $height)
// 三角形の面積
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
// 台形の面積
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);
// "\n"は改行を意味するエスケープシーケンス