<?php
// 関数を作成して東京の時間とそれ以外の国時間を表示できるようにする

function searchCityTime($city_name)
// 引数 city_name には東京が格納される
// function 関数名(引数名) {処理内容}
// searchCityTime()は都市名で検索する関数
{
  require('config/cities.php');
  // cities.phpファイルから都市のリストを読み込む
  // require→外部のPHPファイル(都市データ)を読み込む
  
  foreach ($cities as $city) {
  // 全ての都市を1つずつ取り出して調べるループ
  // foreach→都市ごとに順番に処理する
    if ($city['name'] === $city_name) {
    // ===→型まで等しいこと、完全一致で都市名を比較
      $date_time = new DateTime('', new DateTimeZone($city["time_zone"]));
      // DateTimeクラスで今の時間を取得
      // DateTime→PHPの日付・時間管理クラス
      // その際に$city["time_zone"]をタイムゾーンとして使う
      // DateTimeZone→タイムゾーンを設定するクラス
      $time = $date_time->format('H:i');
      // 取得した日時を「時:分(24時間表記)」のフォーマットで表示するように変換
      $city['time'] = $time;
      // $city配列に新しいキー time を追加
      
      return $city;
      // 条件に合う都市が見つかったら、その都市の情報＋現在時刻を返す
    }
  }
}
// 都市名を渡すと、その都市の現在時刻を調べて返してくれる関数
// 都市名を渡すとcities.phpにあるデータを探して、その都市の現在時刻を返す
