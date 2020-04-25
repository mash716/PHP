<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ユーザー登録</title>
</head>
<body class="center">
<script type="text/javascript" src="js/alert.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<h2>ユーザー登録</h2>
<?//2重対策
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/function/doublecheck.php";
//2重対策
$Check = new Check_Various();
$Check = $Check->doublecheck();
?>
<form method="POST" action="Register_Result.php">
<!-- 2重対策 -->
<input type="hidden" name="token" value=<?php echo($Check);?>>
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>
            <p class="id_1">ユーザー名:</p>
            <p>
                <input type="text" id="name" name="name" size="20" maxlength="40">
            </p>
        </th>
      </tr>
      <tr>
        <th>
        <p class="id_1">カナ:</p>
        <p>
            <input type="text" id="kana" name="kana" size="20" maxlength="40">
        </p>
        </th>
      </tr>
      <tr>
        <th>
        <p class="id_1">年齢:</p>
        <p>
            <input type="text" id="age" name="age" size="20" maxlength="20">
        </p>
        </th>
      </tr>
      <tr>
        <th>
        <p class="id_2">mail:</p>
        <p>
            <input type="text" id="address" name="address" size="20" maxlength="20">
        </p>
        </th>
      </tr>
      <tr>
        <th>
        <p class="id_2">出身地:</p>
        <select id="juusho" name="juusho">
        <optgroup label="北海道・東北">
              <option value="北海道">北海道</option>
              <option value="青森県">青森県</option>
              <option value="秋田県">秋田県</option>
              <option value="岩手県">岩手県</option>
              <option value="山形県">山形県</option>
              <option value="宮城県">宮城県</option>
              <option value="福島県">福島県</option>
            </optgroup>
            <optgroup label="甲信越・北陸">
              <option value="山梨県">山梨県</option>
              <option value="長野県">長野県</option>
              <option value="新潟県">新潟県</option>
              <option value="富山県">富山県</option>
              <option value="石川県">石川県</option>
              <option value="福井県">福井県</option>
            </optgroup>
            <optgroup label="関東">
              <option value="茨城県">茨城県</option>
              <option value="栃木県">栃木県</option>
              <option value="群馬県">群馬県</option>
              <option value="埼玉県">埼玉県</option>
              <option value="千葉県">千葉県</option>
              <option value="東京都">東京都</option>
              <option value="神奈川県">神奈川県</option>
            </optgroup>
            <optgroup label="東海">
              <option value="愛知県">愛知県</option>
              <option value="静岡県">静岡県</option>
              <option value="岐阜県">岐阜県</option>
              <option value="三重県">三重県</option>
            </optgroup>
            <optgroup label="関西">
              <option value="大阪府">大阪府</option>
              <option value="兵庫県">兵庫県</option>
              <option value="京都府">京都府</option>
              <option value="滋賀県">滋賀県</option>
              <option value="奈良県">奈良県</option>
              <option value="和歌山県">和歌山県</option>
            </optgroup>
            <optgroup label="中国">
              <option value="岡山県">岡山県</option>
              <option value="広島県">広島県</option>
              <option value="鳥取県">鳥取県</option>
              <option value="島根県">島根県</option>
              <option value="山口県">山口県</option>
            </optgroup>
            <optgroup label="四国">
              <option value="徳島県">徳島県</option>
              <option value="香川県">香川県</option>
              <option value="愛媛県">愛媛県</option>
              <option value="高知県">高知県</option>
            </optgroup>
            <optgroup label="九州・沖縄">
              <option value="福岡県">福岡県</option>
              <option value="佐賀県">佐賀県</option>
              <option value="長崎県">長崎県</option>
              <option value="熊本県">熊本県</option>
              <option value="大分県">大分県</option>
              <option value="宮崎県">宮崎県</option>
              <option value="鹿児島県">鹿児島県</option>
              <option value="沖縄県">沖縄県</option>
            </optgroup>
            </select>
        </th>
      </tr>
      <tr>
        <th>
        <p class="id_1">生年月日:</p>
        <p>
            <input type="date" id="birthday" name="birthday" size="20" maxlength="20">
        </p>
        </th>
      </tr>
      <tr>
        <th>
        <p class="id_1">tel:</p>
        <p>
            <input type="text" id="tel" name="tel"  size="20" maxlength="20">
        </p>
        </th>
      </tr>
      <tr>
        <th>
        <p class="id_1">password:</p>
        <p>
            <input type="text" id="password" name="password" size="20" maxlength="20">
        </p>
        </th>
      </tr>
      <tr>
        <th>
        <p class="id_1">password2:</p>
        <p>
            <input type="text" id="password2" name="password2" size="20" maxlength="20">
            <input type="submit" value="登録" onclick="return clickBtn()" >
        </p>
        </th>
      </tr>
        <tr>
          <th>
          <p><a href="/php練習//view/main/Main.php">戻る</a></p>
          </th>
      </tr>
    </tbody>
  </table>
</div>
</form>
</body>
</html>