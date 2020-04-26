<?php
//2重対策
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/function/doublecheck.php";
$Check = new Check_Various();
$Check -> doublecheckresult();
#ログインチェック
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/db/Logindb.php";
$obj = new CheckLogin();
$resultLogin= $obj->checkLogin();
$resultAddress = $obj->checkaddress();
$resultPassword = $obj->checkpassword();
if($resultLogin == false){
    exit();
}else if($resultAddress == false){
    exit();
}else if($resultPassword == false){
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title>ユーザ画面</title>

</head>
<body>
<h1>ユーザ画面</h1>
<h2>ようこそ、ログインしてください。</h2>
   <form  action="/php練習/view/main/UserMain.php" method="post">

    </form>
    <a href="/php練習//view/main/Main.php">戻る</a>
</body>
</html>