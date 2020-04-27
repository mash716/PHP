<?php
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/db/Connectdb.php";
class CheckLogin{
    public function checkLogin(){
        session_start();
        //任意の情報のチェック
        try{
            #db接続
            $obj = new ConnectDb();
            $result = $obj->connect();

            // SQL作成
            $sql = 'SELECT * FROM userform WHERE address = ?';

            // SQL実行準備
            $statement = $result->prepare($sql);

            // 値を渡して実行
            $statement->execute([
                $_POST['address']
                ]
            );

            $row = $statement->fetch(PDO::FETCH_ASSOC);
        
        }catch(\Exception $e){
            echo $e->getMessage().PHP_EOL;
        }

        return $row;
    }   
    public function checkaddress(){

        $row = $this->checkLogin();

        $row['name'];
        $row['userid'];
        $row['tel'];

        //emailがDB内に存在しているか確認
        if (!isset($row['address'])) {
            echo 'メールアドレス又はパスワードが間違っています。';
            return exit;
        }
        return true;
    }
    public function checkpassword(){

        $row = $this->checkLogin();
        #パスワードがハッシュ値とマッチしてるか
        if(password_verify($_POST['password'], $row['password'])) {
            session_regenerate_id(true); //session_idを新しく生成し、置き換える
            $_SESSION['address'] = $row['address'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['userid'] = $row['userid'];
            $_SESSION['tel'] = $row['tel'];

            return true;
            }else{
            echo 'メールアドレス又はパスワードが間違っています。';
            return exit;
        }
    }
}
?>