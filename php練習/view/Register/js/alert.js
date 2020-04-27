function clickBtn(){
	/*
	 * jsの入力を取得する方法は、「struts-config.xml」.「property」.value
	 *
	 *
	 * */
	var name = document.getElementById("name").value;
	var kana = document.getElementById("kana").value;
	var age = document.getElementById("age").value;
	var address = document.getElementById("address").value;
	var juusho = document.getElementById("juusho").value;
	var birthday = document.getElementById("birthday").value;
	var tel = document.getElementById("tel").value;
	var password = document.getElementById("password").value;
	var password2 = document.getElementById("password2").value;
	

	//文字数チェック
	var namecount = name.length; 
	var kanacount = kana.length; 
	var kanam = kana.match(/^[\u30a0-\u30ff]+$/);

	//数値チェック
	//小数点チェックができない…
	if (namecount > 30 ){
		alert("名前を30文字以内で書いて下さい");
		return false;
	}else if (kanacount > 30 ){
		alert("カナを30文字以内で書いて下さい");
		return false;
	}else if(isNaN(age)){
		alert("年齢が数値でないです");
		return false;	
	}

			//入力空チェック
			if(name == ""){
				alert("名前の入力値が空です");
				return false;
		    }else if(kana == ""){
				alert("カナの入力値が空です");
				return false;
			}else if(kanam == null){
				alert("カタカナで入力して下さい");
				return false;
			}else if(age == ""){
				alert("年齢が空です");
		    	return false;
			}else if(address == ""){
		    	alert("メールアドレス空です");
		    	return false;
		    }else if(juusho == ""){
		    	alert("住所が空です");
		    	return false;
		    }else if(birthday == ""){
		    	alert("生年月日が空です");
		    	return false;
		    }else if(tel == ""){
		    	alert("電話番号が空です");
		    	return false;
		    }else if(password == ""){
		    	alert("パスワードが空です");
		    	return false;
		    }else if(password2 == ""){
		    	alert("確認パスワードが空です");
		    	return false;
			}else if(password != password2){
				alert("パスワードが一致していません");
				return false;
			}

		    //メールチェック
		    var mail_regex1 = new RegExp( '(?:[-!#-\'*+/-9=?A-Z^-~]+\.?(?:\.[-!#-\'*+/-9=?A-Z^-~]+)*|"(?:[!#-\[\]-~]|\\\\[\x09 -~])*")@[-!#-\'*+/-9=?A-Z^-~]+(?:\.[-!#-\'*+/-9=?A-Z^-~]+)*' );
		    var mail_regex2 = new RegExp( '^[^\@]+\@[^\@]+$' );
		    if( address.match( mail_regex1 ) && address.match( mail_regex2 ) ) {
		        // 全角チェック
		        if( adress.match( /[^a-zA-Z0-9\!\"\#\$\%\&\'\(\)\=\~\|\-\^\\\@\[\;\:\]\,\.\/\\\<\>\?\_\`\{\+\*\} ]/ ) ) {
			    	alert("全角がはいってます\n入力しなおしてください");
		        	return false;
		        }

		    } else {
		    	alert("メールアドレスの内容を確認の上\n入力して下さい。");
		    	return false;
		    }

			if(!confirm('登録しますが宜しいでしょうか？')){
			        /* キャンセルの時の処理 */
			        return false;
			}
			//リターンtrueを返す
		    return true;
}
