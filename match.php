<?php

// var_dump($_POST);
// var_dump($_FILES);
// var_dump($record['picture']);
exit();

$dbn ='mysql:dbname=php_1222_f14;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

$sql = 'SELECT * FROM matching_table';
$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
    <td><img src='img_ex.php?id={$record["id"]}' alt='画像'></td>
    <td>{$record["nickname"]}</td>
    </tr>
  ";
  header('Content-Type: image/jpeg'); // 画像の形式に応じて変更する
    echo $record['picture'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>あなたに合うお相手</h1>
    <?=$output?>
</body>
</html>