<?
Class ConnectDb{
    //DB接続
    public function connect() {

        define('db','mysql:dbname=xs835288_mhs; host=mysql10019.xserver.jp');
        define('user','xs835288_mhs');
        define('password','Wc3cLumJh2q8');
    
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