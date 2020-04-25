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

<title>ログイン画面</title>

</head>
<body>
<h1>ログイン画面</h1>
<h2>ようこそ、ログインしてください。</h2>
   <form  action="/php練習/view/main/UserMain.php" method="post">
     <!-- 2重対策 -->
    　<input type="hidden" name="token" value=<?php echo($Check);?>>
     <label for="email">mail</label>
     <input type="text" name="address"><br>
     <label for="password">password</label>
     <input type="password" name="password"><br>
     <button type="submit">Sign In!</button><br>
</form>
    <a href="/php練習//view/main/Main.php">戻る</a>
</body>
</html>