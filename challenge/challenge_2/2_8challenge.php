<?php

/*
８．７で作成した配列の'soeda'を33に変更してください。
*/

$arr = array();

    // array(0,1,2,3.....)
$arr = array(10,100,'soeda','hayashi',-20,118,'END');

//配列の 'soeda'を 33 に上書きする。
$arr[2] = 33;

//上書きされたことを確認する。
echo $arr[2];

?>
