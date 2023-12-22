<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール設定</title>
    <link rel="stylesheet" href="./css/profile.css">
</head>

<body>
    <div class="profile-container">
<?php

if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
    $uploadDir = 'img/';
    $fileName = basename($_FILES['picture']['name']);
    $uploadFile = $uploadDir . $fileName;

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadFile)) {
        echo 'アップロード成功！';
        // 画像を表示
        echo '<img src="'.$uploadFile.'" alt="アップロードされた画像">';
    } else {
        echo 'アップロードに失敗しました。';
    }
}
?>



        <form action="match_create.php" method="POST"  enctype="multipart/form-data" class="form">
        <h1>プロフィール設定</h1>
        
            
            <div class="input-group">
                <label for="profile-picture">プロフィール写真</label>
                <input type="file" id="profile-picture" name="picture" accept="image/*">
            </div>


            <div class="input-group">
                <label for="name">ニックネーム</label>
                <input type="text" id="name" name="nickname" required>
            </div>

            <div class="input-group">
                <label for="birthdate">生年月日</label>
                <input type="date" id="birthdate" name="birthday" required>
            </div>

            <div class="input-group">
                <label for="live">居住地</label>
                <textarea id="live" name="live" required></textarea>
            </div>

            <div class="input-group">
                <label for="hometown">出身地</label>
                <input type="text" id="hometown" name="froms" required>
            </div>

            <div class="input-group">
                <label for="education">学歴</label>
                <select id="education" name ="education" required>
                    <option value="">選択してください</option>
                    <option value="high_school">高校卒</option>
                    <option value="junior_college">短大/専門学校卒</option>
                    <option value="university">大学卒</option>
                    <option value="graduate_school">大学院卒</option>
                    <option value="other">その他</option>
                </select>
            </div>

            <div class="input-group">
                <label for="occupation">職種</label>
                <input type="text" id="occupation" name="occupation" required>
            </div>

            <div class="input-group">
                <label for="height">身長</label>
                <select id="height" name="height" required></select>
            </div>

            <div class="input-group">
                <label for="bodyShape">体型</label>
                <select id="bodyShape" name="bodyShape" required>
                    <option value="">選択してください</option>
                    <option value="slim">スリム</option>
                    <option value="slightly_slim">やや細め</option>
                    <option value="average">普通</option>
                    <option value="glamour">グラマー</option>
                    <option value="muscular">筋肉質</option>
                    <option value="little_chubby">ややぽっちゃり</option>
                    <option value="chubby">太め</option>
                </select>
            </div>


            <div class="input-group">
                <label for="smoking">タバコ</label>
                <select id="smoking"  name="smoking" required>
                    <option value="">選択してください</option>
                    <option value="no">吸わない</option>
                    <option value="quit_if_disliked">相手が嫌ならやめる</option>
                    <option value="no_in_front_of_non_smoker">非喫煙者の前では吸わない</option>
                    <option value="yes">吸う</option>
                    <option value="e_cigarette">吸う（電子タバコ）</option>
                </select>
            </div>


            <div class="input-group">
                <label for="maritalStatus">結婚歴</label>
                <select id="maritalStatus" name="marital_status" required>
                    <option value="">選択してください</option>
                    <option value="single">未婚</option>
                    <option value="divorced">離婚</option>
                    <option value="widowed">死別</option>
                </select>
            </div>

            <div class="input-group">
                <label for="children">子供の有無</label>
                <select id="children" name="children" required>
                    <option value="">選択してください</option>
                    <option value="none">いない</option>
                    <option value="yes">いる</option>
                </select>
            </div>

            <div class="input-group">
                <label for="meetingExpectations">出会うまでの希望</label>
                <input type="text" id="meetingExpectations" name="matching_expectations" required>
            </div>

            <div class="input-group">
                <label for="marriageIntention">結婚に対する意思</label>
                <select id="marriageIntention"  name="marriage_intention" required>
                    <option value="">選択してください</option>
                    <option value="interested">興味あり</option>
                    <option value="maybe">もしかしたら</option>
                    <option value="not_interested">興味なし</option>
                </select>
            </div>

            <div class="input-group">
                <label for="interests">興味があること</label>
                <input type="text" id="interests"  name="interesting" required>
            </div>

            <button type="submit">保存</button>
        </form>
    </div>
</body>
    <script>
        // 身長の選択肢を生成する
        const heightSelect = document.getElementById('height');
        for (let i = 130; i <= 200; i++) {
            heightSelect.options.add(new Option(`${i} cm`, i));
        }
    </script>
</html>