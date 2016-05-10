<?php

//課題4:課題1で定義した関数に追記する形として、戻り値　true(bool値)　を返却するように修正し、関数の呼び出し側でtrueを受け取れたら「この処理は正しく実行できました」、そうでないなら「正しく実行できませんでした」と表示する

// 論理値 - boolean http://webkaru.net/php/boolean/

function my_profile(){ //ユーザー定義関数の記述
	echo "私の名前は平本裕也です<br>";
	echo "平成5年2月12日　神奈川県出身<br>";
	echo "好きな音楽は洋楽ロック/ポップです<br>";
	echo "趣味はゲームとバイクです<br>";

  return true;
}

for($i= 1 ; $i <= 10 ; $i++) { //10回繰り返す処理
				 echo $i.'回目<br>'; //回数表示

         $a = my_profile(); //echoは不要　関数名();を記述するだけで表示される

         if($a == true){
           echo 'この処理は正しく実行出来ました<br>';
         }else{
           echo '正しく実行できませんでした<br>';
         }
    }



?>
