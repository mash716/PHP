<?php

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
   <form  action="/php練習/view/admin/AdminUserList.php" method="post">
    <input type="hidden" name="adminname" value=<?echo($_SESSION['adminname']);?>><br>
    <input type="hidden" name="adminpassword" value=<?echo($_SESSION['adminpassword']);?>><br>
    <button type="submit">ユーザ一覧</button><br>
    </form>
    <a href="/php練習//view/main/Main.php">戻る</a>
</body>
</html>