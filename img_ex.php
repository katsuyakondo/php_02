<?php
// var_dump($_POST);
// exit();


$dbn ='mysql:dbname=php_1222_f14;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// 画像IDの取得（ここではURLパラメータとして想定）
$imageId = $_GET['id'];

try {
  $pdo = new PDO($dbn, $user, $pwd);
  $stmt = $pdo->prepare("SELECT picture FROM matching_table WHERE id = ?");
  $stmt->execute([$imageId]);
  $picture = $stmt->fetch(PDO::FETCH_ASSOC);

  // 適切なヘッダーの設定
  header('Content-Type: image/png'); // 画像の形式に応じて変更

  // 画像データの出力
  echo $picture['picture'];
} catch (PDOException $e) {
  echo json_encode(["error" => $e->getMessage()]);
  exit();
}
?>
