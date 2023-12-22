    <?php
    // echo"<pre>";
    // var_dump($_POST);
    // echo"</pre>";
    // exit();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imagePath =$_POST["image_path"];
    $name = $_POST["name"] ;

    $write_data = "{$imagePath} {$name}\n";

    // ファイルを開く．引数が`a`である部分に注目！
    $file = fopen('data/data.txt', 'a');
    // ファイルをロックする
    flock($file, LOCK_EX);

    // 指定したファイルに指定したデータを書き込む
    fwrite($file, $write_data);

    // ファイルのロックを解除する
    flock($file, LOCK_UN);
    // ファイルを閉じる
    fclose($file);

    }

    // データを読み込む
    $likes = [];
if (($file = fopen("data/data.txt", "r")) !== FALSE) {
    while (($line = fgets($file)) !== FALSE) {
        $data = explode(" ", trim($line));
        $likes[] = $data;
    }
    fclose($file);
}


    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>いいねした人</title>
        <link rel="stylesheet" href="./style.css/img.css">
    </head>
    <body>
        <button><a href="sample.php">マッチング画面に戻る</a></button>
        <h1>いいねした人</h1>
        <ul>
             <?php foreach ($likes as $like): ?>
         <li>
           <?php if (isset($like[0])): ?>
                    <img src="<?=$like[0] ?>" alt="プロフ画像" />
                <?php endif; ?>
                <?php if (isset($like[1])): ?>
                    <p><?=$like[1] ?></p>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
             </ul>
    </body>
    </html>