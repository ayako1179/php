<?php
// 各国のデータ
// 国名、時間、国旗が1つの箱として格納されるようして、全ての箱がまとまったものを記述する


// 連想配列の配列(多次元配列)
// 都市の情報をまとめて扱えるようにしている
$cities = [
// 変数$citiesに配列(リスト)を代入している
// 都市情報のセットを連想配列として1つ入れてる
  [
    'name' => 'シドニー',
    // 表示名(日本語名)
    'time_zone' => 'Australia/Sydney',
    // PHPで使うタイムゾーンのID
    'img' => 'australia.jpg'
    // 表示用の画像ファイル名
  ],
  [
    'name' => '東京',
    'time_zone' => 'Asia/Tokyo',
    'img' => 'japan.jpg'
  ],
  [
    'name' => '上海',
    'time_zone' => 'Asia/Shanghai',
    'img' => 'china.jpg'
  ],
  [
    'name' => 'モスクワ',
    'time_zone' => 'Europe/Moscow',
    'img' => 'russia.jpg'
  ],
  [
    'name' => 'ロンドン',
    'time_zone' => 'Europe/London',
    'img' => 'british.jpg'
  ],
  [
    'name' => 'ヨハネスブルグ',
    'time_zone' => 'Africa/Johannesburg',
    'img' => 'south-africa.jpg'
  ],
  [
    'name' => 'ニューヨーク',
    'time_zone' => 'America/New_York',
    'img' => 'america.jpg'
  ]
];
