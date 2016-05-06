<?php

/*

配列とは

配列とは、たくさんのデータを出し入れできる箱です。入れたデータは番号管理され、データを引き出す際にその番号を指定することで中身を確認できます。

array()とすると、空の配列を用意できます。
さらに、array(1,2,3,4,5)など、予め中身を詰めておく事も可能です。中身に入れられるものにも制限はないため、数字・文字に限らず、何でも持たせる事が可能です。

７．以下の順番で、要素が格納された配列を作成してください。
　　　　10, 100, 'soeda', 'hayashi', -20, 118, 'END'
*/


$arr = array();

// $arr 変数名をarr(arrayの短縮形 意味は配列 arr以外でも意味の分かるものであればおｋ!) = array();

    // array(0,1,2,3.....)配列は番号で管理される(以下の場合3='soeda')。
$arr = array(10,100,'soeda','hayashi',-20,118,'END');

//配列を表示する。
for ($i =0; $i < count($arr); $i++){
  echo $arr[$i] . "<br>";
}

?>
