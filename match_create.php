<?php
// //  echo"<pre>";
// var_dump($_POST);
//  echo"</pre>";
//   echo"<pre>";
// var_dump($_FILES);
//  echo"</pre>";
// exit();


// データをサーバーに送るためのPHPファイル（②）

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 画像のアップロード処理
    if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
        $uploadDir = 'img/';
        $fileName = basename($_FILES['picture']['name']);
        $uploadFile = $uploadDir . $fileName;

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadFile)) {
            echo 'アップロード成功！';
            $picture = $uploadFile;
        } else {
            echo 'アップロードに失敗しました。';
        }
    }
}


// フォームデータと画像のパスをデータベースに挿入

$nickname = $_POST['nickname'];
$birthday = $_POST['birthday'];
$live = $_POST['live'];
$froms = $_POST['froms'];
$education = $_POST['education'];
$occupation = $_POST['occupation'];
$height = $_POST['height'];
$bodyShape = $_POST['bodyShape'];
$smoking =  $_POST['smoking'];
$marital_status = $_POST['marital_status'];
$children = $_POST['children'];
$matching_expectations = $_POST['matching_expectations'];
$marriage_intention = $_POST['marriage_intention'];
$interesting =$_POST['interesting'];


// DB接続
// 各種項目設定
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

// echo"DBOK";
// exit();

$sql = 'INSERT INTO matching_table (id, nickname, birthday, live, froms, education, occupation, height, bodyShape, smoking, marital_status, children, matching_expectations, marriage_intention, interesting, picture, created_at, updated_at) VALUES (NULL, :nickname, :birthday, :live, :froms, :education, :occupation, :height, :bodyShape, :smoking, :marital_status, :children, :matching_expectations, :marriage_intention, :interesting, :picture, now(), now())';
$stmt = $pdo->prepare($sql);

$stmt->bindValue(':nickname', $nickname, PDO::PARAM_STR);
$stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);
$stmt->bindValue(':live', $live, PDO::PARAM_STR);
$stmt->bindValue(':froms', $froms, PDO::PARAM_STR);
$stmt->bindValue(':education', $education, PDO::PARAM_STR);
$stmt->bindValue(':occupation', $occupation, PDO::PARAM_STR);
$stmt->bindValue(':height', $height, PDO::PARAM_STR);
$stmt->bindValue(':bodyShape', $bodyShape, PDO::PARAM_STR);
$stmt->bindValue(':smoking', $smoking, PDO::PARAM_STR);
$stmt->bindValue(':marital_status', $marital_status, PDO::PARAM_STR);
$stmt->bindValue(':children', $children, PDO::PARAM_STR);
$stmt->bindValue(':matching_expectations', $matching_expectations, PDO::PARAM_STR);
$stmt->bindValue(':marriage_intention', $marriage_intention, PDO::PARAM_STR);
$stmt->bindValue(':interesting', $interesting, PDO::PARAM_STR);
$stmt->bindValue(':picture', $picture, PDO::PARAM_STR); // アップロードされた画像のパス


try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}
header('Location:match.php');
exit();