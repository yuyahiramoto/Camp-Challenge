<?php

/*６．変数を宣言し、その変数の中身によって以下の表示を行ってください。
　　　⇒値が 1 なら「１です！」
　　　⇒値が 2 なら「プログラミングキャンプ！」
　　　⇒値が 'a' なら「文字です！」
　　　⇒それ以外なら「その他です！」*/


	$param = 'a';
	if($param == 1){
		//$paramが1の場合、ここに来ます。
	echo 'paramは1です。';
	
	}elseif($param == 2){
		//$paramが2の場合、ここに来ます。
		echo 'プログラミングキャンプ!';
	
	}elseif($param == 'a'){
		//$paramがaの場合、ここに来ます。
		echo '文字です!';
		
	}else{
		//それ以外はここに来ます。
		echo'その他です!';
	}
	
	
?>
