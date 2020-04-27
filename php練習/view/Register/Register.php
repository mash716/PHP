<?php 
//メール送信
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/mail/mail.php";
mailsend();
//2重対策
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/function/doublecheck.php";
$Check = new Check_Various();
$Check -> doublecheckresult();

require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/db/Registerdb.php";
$obj = new RegisterDb();
$obj -> register();
?>
<html>
<p>登録しました！！<p>
<p><a href="/php練習//view/main/Main.php">メイン画面へ戻る</a></p>
</html>


