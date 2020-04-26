<?php
require_once "/home/xs835288/mhs-pgmash.com/public_html/php練習/db/Connectdb.php";
class CheckAdminLogin{
    public function checkAdminLogin(){
        session_start();
        //任意の情報のチェック
        try{
            #db接続
            $obj = new ConnectDb();
            $result = $obj->connect();

            // SQL作成
            $sql = 'SELECT * FROM adminlogin WHERE adminname = ?  ';

            // SQL実行準備
            $statement = $result->prepare($sql);

            // 値を渡して実行
            $statement->execute([
                $_POST['adminname']
                ]
            );

            $row = $statement->fetch(PDO::FETCH_ASSOC);
        
        }catch(\Exception $e){
            echo $e->getMessage().PHP_EOL;
        }

        return $row;
    }   
    public function checkAdminaddress(){

        $row = $this->checkAdminLogin();

        //emailがDB内に存在しているか確認
        if (!isset($row['adminname'])) {
            echo '管理者名かパスワードが間違っています。';
            return false;
        }else if(!($row['adminpassword'] == $_POST['adminpassword'])){
            echo '管理者名かパスワードが間違っています。';
            return false;
        }
        return true;
    }
    public function checkAdminPassword(){
        $row = $this->checkAdminLogin();
        session_regenerate_id(true); //session_idを新しく生成し、置き換える
        $_SESSION['adminpassword'] = $row['adminpassword'];
        return true;
        echo '管理者名かパスワードが間違っています。';
        return false;


        #パスワードがハッシュ値とマッチしてるか
        // if(password_verify($_POST['password'], $row['password'])) {
        //     session_regenerate_id(true); //session_idを新しく生成し、置き換える
        //     $_SESSION['EMAIL'] = $row['email'];
        //         return true;
        //     }else{
        //     echo 'メールアドレス又はパスワードが間違っています。';
        //     return false;
        // }
    }
}
?>