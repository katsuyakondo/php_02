<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マッチングアプリ
    </title>
    <link rel="stylesheet" href="./style.css/style.css">
     <!-- Font AwesomeのCSSファイルのリンク（アイコン用） -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
 <!-- プロフィールカードの開始 -->
<div class="card">
<!-- フォームの開始。送信先はsample_confirm.php -->
    <form action="sample_confirm.php" method="POST" class="form">
        <!-- プロフィール画像の表示 -->
        <img src="./img/kao.jpg" alt="" class="profile-image">
        <!-- 画像のパスを隠しフィールドとして送信 -->
        <input type="hidden" name="image_path" value="./img/kao.jpg">

        <!-- 名前の表示 -->
        <p class="text">山田花子</p>
        <!-- 名前を隠しフィールドとして送信 -->
        <input type="hidden" name="name" class="name_value">

        <!-- アンマッチボタン（×マーク） -->
        <button class="unmatch" name="unmatch">
            <i class="fa-solid fa-circle-xmark fa-xl"></i>
        </button>
        <!-- マッチングボタン（ハートマーク） -->
        <button class="matching" name="match">
            <i class="fa-solid fa-heart fa-xl"></i>
        </button>
    </form>
</div>
<!-- プロフィールカードの終了 -->

<!-- 以下は上記のプロフィールカード同様の構造 -->
<div class="card">
    <form action="sample_confirm.php" method="POST" class="form">
        <img src="./img/kao3.jpg" alt="" class="profile-image">
        <input type="hidden" name="image_path" value="./img/kao3.jpg">

        <p class="text">田中一子</p>
       <input type="hidden" name="name" class="name_value">

        <button class="unmatch" name="unmatch">
            <i class="fa-solid fa-circle-xmark fa-xl"></i>
        </button>
        <button class="matching" name="match">
            <i class="fa-solid fa-heart fa-xl"></i>
        </button>
    </form>
</div>

<div class="card">
    <form action="sample_confirm.php" method="POST" class="form">
        <img src="./img/kao2.jpg" alt="" class="profile-image">
        <input type="hidden" name="image_path" value="./img/kao2.jpg">

        <p class="text">山本太郎</p>
       <input type="hidden" name="name" class="name_value">

        <button class="unmatch" name="unmatch">
            <i class="fa-solid fa-circle-xmark fa-xl"></i>
        </button>
        <button class="matching" name="match">
            <i class="fa-solid fa-heart fa-xl"></i>
        </button>
    </form>
</div>

</body>
<!-- Font AwesomeのJavaScriptファイルのリンク -->
<script src="https://kit.fontawesome.com/9ebd72d89c.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  

<script>
    // ×マークをクリックした際のアニメーション処理
    $(".fa-circle-xmark").on("click",function() {
        $(".card").animate({
           "marginRight":"758px"
        },2000,function(){
            $(this).fadeOut();
        });
    });

    // ハートマークをクリックした際のアニメーション処理
    $(".fa-heart.fa-xl").on("click", function () {
        $(".card").animate({
            "marginLeft": "758px"
          }, 2000, function () {
             $(this).fadeOut();
         });
     });

 // ページが読み込まれたときに行う処理
 $(document).ready(function() {
        // pタグの内容を隠しフィールドに設定
        $('.form').each(function() {
        let name = $(this).find('.text').text(); // 名前を取得
        $(this).find('.name_value').val(name); // 隠しフィールドに設定
    });
    });

</script>
</html>