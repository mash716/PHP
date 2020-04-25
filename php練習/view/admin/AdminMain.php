<?php
//2重対策
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/function/doublecheck.php";
$Check = new Check_Various();
$Check -> doublecheckresult();


require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/db/Admindb.php";
$obj = new CheckAdminLogin();
$resultAdminLogin= $obj->checkAdminLogin();
$resultAdminAddress = $obj->checkAdminaddress();
$resultAdminPassword = $obj->checkAdminpassword();
if($resultAdminLogin == false){
    exit();
}else if($resultAdminAddress == false){
    exit();
}else if($resultAdminPassword == false){
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title>管理者画面</title>

</head>
<body>
<h1>管理者画面</h1>
   <form  action="/php練習/view/main/UserMain.php" method="post">

    </form>
    <a href="/php練習//view/main/Main.php">戻る</a>
</body>
</html>