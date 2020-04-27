<? 
class Check_Various{
    /*クロスサイト対策*/
    public function doublecheck(){
        // セッションを開始する
        //2重送信対策
        session_start();
        // トークンを発行する
        $token = md5(uniqid(rand(), true));
        // トークンをセッションに保存
        $_SESSION['token'] = $token;

        return $_SESSION['token'];
    }

    public function doublecheckresult(){
        // セッションを開始する
        session_start();

        // セッションに入れておいたトークンを取得
        $session_token = isset($_SESSION['token']) ? $_SESSION['token'] : '';
        // POSTの値からトークンを取得
        var_dump($session_token);
        $token = isset($_POST['token']) ? $_POST['token'] : '';
        // トークンがない場合は不正扱い
        if ($token === '') {
            die("不正な処理ですよ。");
        }

        // セッションに入れたトークンとPOSTされたトークンの比較
        if ($token !== $session_token) {
            die("不正な処理ですよ。");
        }

        // セッションに保存しておいたトークンの削除
        unset($_SESSION['token']);

    }
}
?>