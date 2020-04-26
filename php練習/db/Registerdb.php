<?
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/db/Connectdb.php";
class  RegisterDb{

    //任意の情報のチェック
    public function checkRegist(){
            #db接続
            $obj = new ConnectDb();
            $db = $obj->connect();
    
        // SQL作成
        $sql = 'SELECT * FROM userform WHERE address = :address';
    
        // SQL実行準備
        $statement = $db->prepare($sql);
    
        // 値を渡して実行
        $statement->execute( array(
            ':address' => $_POST['address']
        ));
    
        // 結果を取得
        $result = $statement->fetchAll();
        return $result;
    }
    public function register(){

        try{
            #db接続
            $obj = new ConnectDb();
            $db  = $obj->connect();
            //sql文
            $sql = 'insert into userform(name,kana,age,address,juusho,birthday,tel,password,password2)
            values(:name,:kana,:age,:address,:juusho,:birthday,:tel,:password,:password2)';
            //プリペアードステートメンとを生成
            $stt = $db->prepare($sql,[PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL]);
            $stt->execute([':name' => $_POST['name'],
                                ':kana' => $_POST['kana'],
                                ':age' => $_POST['age'],
                                ':address' => $_POST['address'],
                                ':juusho' => $_POST['juusho'],
                                ':birthday' => $_POST['birthday'],
                                ':tel' => $_POST['tel'],
                                //修正点 2020/04/25 passwordhash化
                                ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                                ':password2' => password_hash($_POST['password2'], PASSWORD_DEFAULT)
            ]);
            $db = NULL;
        }catch(PDOException $e){
            exit('失敗しました:{$e->getMessage()}');
        }
    }
}
?>