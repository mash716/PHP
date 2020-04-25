function change(){
    var val = document.getElementById("sample").innerHTML = "変更されました";
}

function openMenu(n) {            //リストを開く
	try{

	    closeMenu()            //表示中のリストを閉じる
	    if(n == 1) {            //リスト１を開く
	        li1.style.display = "block";
	    }else if(n == 2){
	    	li2.style.display = "block";
	    }else if(n == 3){
	    	li3.style.display = "block";
	    }else if(n == 4){
	    	li4.style.display = "block";
	    }else if(n == 5){
	    	li5.style.display = "block";
	    }
	}catch(e){
		console.log("この処理はみらへんで");
	}
}

function closeMenu() {            //リストを閉じる
		var elem = document.getElementsByClassName("list");
		  for(i=0;i<elem.length;i++){
				elem[i].style.display = "none";
		 }
}

function set2fig(num) {
		try{
		   // 桁数が1桁だったら先頭に0を加えて2桁に調整する
		   //変数定義 ret
		   var ret;
		   //引数numの値に
		   if( num < 10 ) {
			   ret = "0" + num;
		   }
		   else { ret = num; }
		   return ret;
		}catch(e){
			console.log("この処理はみらへんで");
		}
	}
	function showClock2() {
	try{
			   var nowTime = new Date();
			   //時間表示
			   /*
			    *	var year = now.getFullYear();
					var mon = now.getMonth()+1; //１を足すこと
					var day = now.getDate();
			    */

			   //リアルタイムの日時を表示する
			   var nowYear = set2fig( nowTime.getFullYear() );
			   var nowMon = set2fig( nowTime.getMonth() );
			   var nowDay = set2fig( nowTime.getDate() );
			   var nowHour = set2fig( nowTime.getHours() );
			   var nowMin  = set2fig( nowTime.getMinutes() );
			   var nowSec  = set2fig( nowTime.getSeconds() );
			   //日時を変数に代入
			   var msg ="日程：" + nowYear + "/" + nowMon + "/" + nowDay + "\t"+ nowHour + ":" + nowMin + ":" + nowSec ;
			   //色指定
			   document.getElementById("RealtimeClockArea2").style.color = "red";
			   //フォントサイズ指定
			   document.getElementById("RealtimeClockArea2").style.fontSize = "11px";
			   //背景食指定
			   document.getElementById("RealtimeClockArea2").style.backgroundColor = "black";
			   //幅指定
			   document.getElementById("RealtimeClockArea2").style.width = "140px";
			   //html形式で表示する
			   document.getElementById("RealtimeClockArea2").innerHTML = msg;
		}catch(e){
			console.log("この処理はみらへんで");
		}
	}
	setInterval('showClock2()',1000);