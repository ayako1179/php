<?php
// foreach文をつかって多次元配列の値をすべて出力する
// 多次元配列(二次元配列)
$people = [
  ['Taro', 25, 'men'],
  // 0番目の人
  ['Jiro', 20, 'men'],
  // 1番目の人
  ['hanako', 16, 'women']
  // 2番目の人
];
// 配列の中に、さらに3つの配列(1人分の情報)が入ってる状態

foreach ($people as $person) {
// $peopleの中にある1人分の配列を、順番に$personに代入して使いますという意味
  echo $person[0] . '(' . $person[1] .  '歳' . $person[2] .
')' . '<br />';
}
// この$personは「今から1つずつ$peopleの中身を$personという名前で使うよ！」っていう宣言
// だから、前もって$personを定義しておく必要はない


// もっと読みやすい書き方
// 連想配列＋多次元配列
$people = [
  ['name' => 'Taro', 'age' => 25, 'gender' => 'men'],
  ['name' => 'Jiro', 'age' => 20, 'gender' => 'men'],
  ['name' => 'hanako', 'age' => 16, 'gender' => 'women']
];

foreach ($people as $person) {
  echo $person['name'] . '(' . $person['age'] . '歳' . $person['gender'] . ')' . '<br />';
}
// この書き方だとどの数字が何のてデータかわかりやすくなる
