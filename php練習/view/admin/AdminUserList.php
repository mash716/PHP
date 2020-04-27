<? 
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/db/Connectdb.php";
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
<title>登録済みデータ一覧</title>
<link rel="stylesheet" type="text/css" href="../css/style_select.css">
</head>
<h2>登録済みデータ一覧</h2>

<table  border="1" >
    <tr>
        <th>ID</th><th>氏名</th><th>カナ</th><th>年齢</th><th>メール</th><th>住所</th><th>生年月日</th><th>電話番号</th>
    </tr>
<?php
    try{
        //データベースに接続してPDO を生成
        #db接続
        $obj = new ConnectDb();
        $result = $obj->connect();
        //SQL文
        $sst=$result->prepare('SELECT * FROM userform ORDER BY userid ASC LIMIT 5 OFFSET 0 ');
        //プリペアドステートメントを実行
        $sst->execute();
        //結果セットからレコードのデータをフェッチする
        while($row = $sst->fetch(PDO::FETCH_ASSOC)){

?>
    <tr>
        <td><?php echo($row['userid']);?></td>
        <td><?php echo($row['name']);?></td>
        <td><?php echo($row['kana']);?></td>
        <td><?php echo($row['age']);?></td>
        <td><?php echo($row['address']);?></td>
        <td><?php echo($row['juusho']);?></td>
        <td><?php echo($row['birthday']);?></td>
        <td><?php echo($row['tel']);?></td>
    </tr>
<?php
        }
        $db =NULL;
    }catch(PDOException $e){
        die("データベース接続出来へんで。:{$e->getMessage()}");
    }
?>
</table>
<form  action="/php練習/view/admin/AdminMain.php" method="post">
     <input type="hidden" name="adminname" value=<?echo($resultAdminPassword);?>><br>
     <input type="hidden" name="adminname" value=<?echo($_SESSION['adminname']);?>><br>
     <input type="hidden" name="adminpassword" value=<?echo($_SESSION['adminpassword']);?>><br>
     <button type="submit">戻る</button><br>
</form>
</body>
</html>