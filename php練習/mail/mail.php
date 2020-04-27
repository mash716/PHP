<?php
    function mailsend(){

        $to = "manshoupgnuma2165@gmail.com";
        $subject = "登録メール送信あり";
        $message = "Hello!\r\nThis is register MAIL.";
        $headers = "From: from@samurai.jp";
        
        return mail($to, $subject, $message, $headers);
        
    }
?>