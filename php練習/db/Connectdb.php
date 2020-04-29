<?
Class ConnectDb{
    //DB接続
    public function connect() {

        define('db','mysql:dbname=(データベース名); host=(ドメイン名かIP)');
        define('user','(ユーザー名)');
        define('password','(パスワード)');
    
        try{
            $db = new PDO(db ,user , password);
            #print('接続成功しました');
        }catch(PDOException $e){
            exit('失敗しました:{$e->getMessage()}');
        }
        return $db;
    }
}
?>