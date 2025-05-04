<?php
// if文
$a = 5;

if ($a === 5) {
echo "\$aは5です";
}


$b = 7;

if ($b === 5) {
  echo "\$bは5です";
}else{
  echo "\$bは5以外です";
}


$c = 7;

if ($c === 5) {
  echo "\$cは5です";
}elseif ($c === 7){
  echo "\$cは7です";
}else{
  echo "\$cは5と7以外です";
}


// switch文
$people = "Saburo";

switch ($people) {
  case "Taro":
  echo "太郎です";
  break;
  case "Jiro":
  echo "次郎です";
  break;
  case "Saburo":
  echo "三郎です";
  break;
}


// 三項演算子
$d = 7;
$e = ($d > 5) ? "TRUE" : "FALSE";
echo $e;