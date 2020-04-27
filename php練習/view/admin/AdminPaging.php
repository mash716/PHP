
<?php
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/db/Connectdb.php";
$obj = new ConnectDb();
$conn  = $obj->connect();

// データ数を取得する
$sql = "SELECT COUNT(*) AS cnt FROM userform ";
$res = mysqli_query($sql, $conn) or die("データ抽出エラー");
$row = mysql_fetch_array($res, MYSQL_ASSOC);
$dtcnt = $row["cnt"];

// 取り出す最大レコード数
$lim = 10;

// 表示するページ位置を取得する
$p = intval(@$_GET["p"]);
if ($p < 1) {
    $p = 1;
}

// 表示するデータの位置を取得する
$st = ($p - 1) * $lim;

// 前のページ／次のページのページ番号を取得する
$prev = $p - 1;
if ($prev < 1) {
    $prev = 1;
}
$next = $p + 1;

// データを取り出す
$sql = "SELECT item1, item2 FROM table LIMIT $st, $lim;";
$res = mysql_query($sql, $conn) or die("データ抽出エラー");

// 取り出したデータを表示する(出力文字コードはSJISとする)
while ($row = mysql_fetch_array($res, MYSQL_ASSOC)) {
    echo cnv_dbstring($row["item1"], "SJIS")."<br>";
    echo cnv_dbstring($row["item2"], "SJIS")."<br>";
}

// 前のページ／次のページへのリンク
if ($p > 1) {
    echo " <a href=\"".$_SERVER["PHP_SELF"]."?p=$prev\">
    前のページ</a>";
}
if (($next - 1) * $lim < $dtcnt) {
    echo " <a href=\"".$_SERVER["PHP_SELF"]."?p=$next\">
    次のページ</a>";
}

// 接続を解除する
mysql_close($conn);

// データの文字コードを変換する関数
function cnv_dbstring($string, $enc) {
    // 文字コードを変換する
    $det_enc = mb_detect_encoding($string);
    if ($det_enc  and $det_enc != $enc) {
        return mb_convert_encoding($string, $enc, $det_enc);
    }
    else {
        return $string;
    }
}
?>