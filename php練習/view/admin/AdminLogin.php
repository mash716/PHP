<?php
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/function/doublecheck.php";
//2重対策
$Check = new Check_Various();
$Check = $Check->doublecheck();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title>管理者ログイン画面</title>

</head>
<body>
<h1>管理者ログイン画面</h1>
<form  action="/php練習/view/admin/AdminMain.php" method="post">
     <label for="adminname">管理者名</label>
    <!-- 2重対策 -->
    <input type="hidden" name="token" value=<?php echo($Check);?>>
     <input type="text" name="adminname"><br>
     <label for="adminpassword">password</label>
     <input type="text" name="adminpassword"><br>
     <button type="submit">Sign In!</button><br>
</form>
    <a href="/php練習//view/main/Main.php">戻る</a>
</body>
</html>