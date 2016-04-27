﻿<?php

/*

　７．クエリストリングを利用して、以下の処理を実現してください。

　スーパーのレジでレシートを作る仕組みを作成します。
　クエリストリングで総額・個数・商品種別を受け取って処理します。

　①商品種別は、３つ。１：雑貨、２：生鮮食品、３：その他
　　まずは、この商品種別を表示してください。

　②総額と個数から１個当たりの値段を算出してください。
　　総額と１個当たりの値段を表示してください。

　③3000円以上購入で4%、5000円以上購入で5%のポイントが付きます。
　　購入額に応じたポイントの表示を行ってください。

*/


//テスト用URL:http://localhost/develop/1_7challenge.php?type=&total=&num=


//①商品種別の表示

//商品種別変数名を'type'とする。
	$type = $_GET['type'];//URLに入力された「~.php?type=」から取得する
	
	if($type == 1){
		//$typeが1の場合、ここに来ます。
	echo '商品種別1:雑貨';
	
	}elseif($type == 2){
		//$typeが2の場合、ここに来ます。
	echo '商品種別2:生鮮食品';
	
	}elseif($type == 3){
		//$typeが1の場合、ここに来ます。
	echo '商品種別3:その他';
	}
	
?>

<?php

//②値段の表示

	//総額
	$total = $_GET['total'];//総額の変数名を'total'とする。

	//個数
	$num = $_GET['num'];//個数の変数名を'num'とする。
	
	//総額を個数で割って、1個あたりの値段を算出する。
	
	$price = $total / $num;//総額÷個数（1個あたりの金額を'price'とする。）
	echo $price; //計算結果を表示する。

?>


<?php

//③購入金額に応じたポイントの表示

	if($price >= 5000 ) { //もし'$price'(購入金額)が5000円以上ならば、 (金額の大きい順に下に行く)
		echo 'ポイント5％が付与されました';
	}elseif($price >= 3000 ) { //もし'$price'(購入金額)が3000円以上ならば、
		echo 'ポイント4％が付与されました';
	}else{ //もし'$price'(購入金額)が3000円以下ならば、
		echo '今回ポイントは発生しませんでした';
	}

?>


