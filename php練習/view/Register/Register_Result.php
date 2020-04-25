<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<title>ユーザー登録</title>
</head>
<body>
<table>
<?php 
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/db/Registerdb.php";
//2重対策
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/function/doublecheck.php";

$obj = new RegisterDb();
$result = $obj->checkRegist();
if($result == null){
?>

<!-- 確認情報 -->
<h2>登録情報確認画面です</h2>
<? echo($_POST['name']);?>さん、下記情報で間違いないでしょうか？<br>
<?php echo($_POST['kana']);?><br>
<?php echo($_POST['age']);?><br>
<?php echo($_POST['address']);?><br>
<?php echo($_POST['juusho']);?><br>
<?php echo($_POST['birthday']);?><br>
<?php echo($_POST['tel']);?><br>
<?php echo($_POST['password']);?><br>
<?php echo($_POST['password2']);?><br>
<!-- 登録送信 -->
<form method="POST" action="Register.php">
<? 
//2重対策
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/function/doublecheck.php";
$Check = new Check_Various();
$Check -> doublecheckresult();

//2重対策
$Check = new Check_Various();
$Check = $Check->doublecheck();
?>
<input type="hidden" name="token" value=<?php echo($Check);?>>

<input type="hidden" name="name" value=<?php echo($_POST['name']);?>>
<input type="hidden" name="kana" value=<?php echo($_POST['kana']);?>>
<input type="hidden" name="age" value=<?php echo($_POST['age']);?>>
<input type="hidden" name="address" value=<?php echo($_POST['address']);?>>
<input type="hidden" name="juusho" value=<?php echo($_POST['juusho']);?>>
<input type="hidden" name="birthday" value=<?php echo($_POST['birthday']);?>>
<input type="hidden" name="tel" value=<?php echo($_POST['tel']);?> >
<input type="hidden" name="password" value=<?php echo($_POST['password']);?>>
<input type="hidden" name="password2" value=<?php echo($_POST['password2']);?>>
<input type="submit" class="id_3" value="登録" />
<p><a href="/php練習//view/main/Main.php">戻る</a></p>
<form>
<?php
}else{
    echo("同じ情報があるため登録できません");
}
?>
</table>
</body>
</html>
