<!-- 世界時計アプリの見た目 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <!-- sanitize.cssを読み込む -->
  <!-- リセット用のスタイルシートは必ず1番最初 -->
  <link rel="stylesheet" href="css/common.css">
  <!-- common.cssを読み込む -->
  <link rel="stylesheet" href="css/index.css">
  <!-- index.cssを読み込む -->
</head>

<body>
  <!-- ヘッダー -->
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php02/index.php">
        World Clock
      </a>
    </div>
  </header>
  <!-- ラジオボタン -->
  <main>
    <!-- ページのメインの内容を囲むタグ -->
    <div class="search-form__content">
      <!-- タイトルのブロック -->
      <h2 class="search-form__content-title">日本と世界の時間を比較</h2>
    </div>
    <!-- result.phpファイルへデータの送信を行う -->
    <form class="search-form" action="result.php" method="get">
      <!-- 検索フォーム全体 -->
      <!-- action="result.php"→検索ボタンを押したときに、選んだ都市の情報をGETでresult.phpに送る -->
      <div class="search-form__item">
        <!-- 都市を選ぶ部分 -->
        <select class="search-form__item-select" name="city">
        <!-- select→ドロップダウンリストを作るタグ -->
        <!-- name="city"→選択された都市の値がcity=シドニーのようにURLに含まれる -->
          <option value="シドニー">シドニー</option>
          <option value="上海">上海</option>
          <option value="モスクワ">モスクワ</option>
          <option value="ロンドン">ロンドン</option>
          <option value="ヨハネスブルグ">ヨハネスブルグ</option>
          <option value="ニューヨーク">ニューヨーク</option>
        </select>
      </div>
      <div class="search-form__button">
      <!-- 検索ボタン -->
        <button class="search-form__button-submit" type="submit">検索</button>
      <!-- type="submit"→このボタンを押すと、フォームの内容を送信 -->
      </div>
    </form>
  </main>
</body>

</html>