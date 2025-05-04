<?php
// index.phpファイルのラジオボタンで選択した都市の画像と時間が表示されるページ

require_once('functions/search_city_time.php');
// search_city_time.phpファイルを読み込む
$tokyo = searchCityTime('東京');
// 東京の時間を表示する記述
// searchCityTime関数を呼び出す
// 呼び出された関数はsearch_city_time.phpファイルにて処理を行う
$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
// index.phpファイルの method タグがGETであるため取得する際も $_GET を使用する
// htmlspecialchars はフォームを利用したセキュリティの攻撃を防ぐためにエスケープ処理をするための関数
$comparison = searchCityTime($city);
// 送信された内容から表示する国を特定する
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Clock</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php02/index.php">
        World Clock
      </a>
    </div>
  </header>

  <main>
  <!-- ページのメインコンテンツ -->
    <div class="result__content">
    <!-- 全体の枠(中央寄せ＋パディングあり) -->
      <div class="result-cards">
      <!-- カードを並べるボックス(Flexで横並び) -->
        <div class="result-card">
        <!-- カードは2つ -->
        <!-- $tokyoと$comparisonの2都市が並んでる -->
        <!-- それぞれ内容は同じ構成 -->
          <div class="result-card__img-wrapper">
          <!-- ①result-card__img-wrapper
           img/フォルダの中にある画像を表示 -->
            <img class="result-card__img" src="img/<?php echo $tokyo['img']?>" alt="国旗">
          </div>
          <!-- $tokyoという変数で東京の情報を表示してる -->
          <div class="result-card__body">
            <p class="result-card__city">
              <?php echo $tokyo['name']?>
            </p>
            <p class="result-card__time">
              <?php echo $tokyo['time']?>
            </p>
          </div>
        </div>
        <div class="result-card">
          <div class="result-card__img-wrapper">
            <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
          <!-- ?php echo ... ?→PHPで変数の中身をHTMLに埋め込んで表示 -->
          </div>
          <div class="result-card__body">
            <p class="result-card__city">
              <?php echo $comparison['name']?>
            </p>
            <p class="result-card__time">
              <?php echo $comparison['time']?>
            </p>
            <!-- $comparisonという変数で各都市の情報を表示している -->
          </div>
        </div>
      </div>
    </div>
  </main> 
</body>

</html>