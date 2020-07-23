<?php
// DB接続の設定
// DB名は`gsacf_x00_00`にする
$dbn = 'mysql:dbname=gsacf_d06_tamago;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  // ここでDB接続処理を実行する
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  // DB接続に失敗した場合はここでエラーを出力し，以降の処理を中止する
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit('dbError:' . $e->getMessage());
}

// データ取得SQL作成
$sql = 'SELECT * FROM tamago_table';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

// データ登録処理後
$view = '';
if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
} else {
  // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
  // fetchAll()関数でSQLで取得したレコードを配列で取得できる
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
  $output = "";

  // <tr><td>deadline</td><td>todo</td><tr>の形になるようにforeachで順番に$outputへデータを追加
  // `.=`は後ろに文字列を追加する，の意味
  foreach ($result as $record) {
    $output .= "<tr>";
    // $output .= "<td>{$record["id"]}</td>";
    $output .= "<td>{$record["etsuko_word"]}</td>";
    $output .= "</tr>";
  }
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="abecss/style5.css">
  <link rel="stylesheet" href="css/switch_style.css">
  <title>VINE</title>
</head>

<body class="read_body">

  <fieldset>
    <legend class="etsukopage">だいすけのページ♤</legend>
    <table class="tableword">
      <thead>
        <tr>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>

        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
  <div class="mid">


</body>

<footer>
  <div class="container">
    <a href="tel:090-9493-8313" class="btn-animation-02"><span>攻める<span></a>
    <a href="#" class="btn-animation-03"><span>焦らす<span></a>
  </div>
  </div>
  <div>
    <a href="tamago_input.php">《 えつこのページへ 》</a>
  </div>
</footer>

</html>


<!-- <a href="tel:080-3728-7584">せめる</a>
    <label class="rocker">
      <input type="checkbox" checked>
      <a class="switch-left" href="tel:080-3728-7584">せめる</a>
      <!-- <a class="switch-left" >せめる</a> -->
<!-- <span class="switch-right">じらす</span> -->
<!-- </label> -->