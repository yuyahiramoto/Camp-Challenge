<?php

//課題1:Challenge_dbへのエラーハンドリングを含んだ接続の確立を行ってください

/*
記述方法

try{
エラーを取得したい処理;
}catch(エラーの型　エラーの格納される変数){
	エラーが発生した際に行いたい処理;
}

*/

//tyr~catchで囲んでおくことで、その間のエラーを取得＆表示
try{
$pdo_object=
 	new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','yuya','password');
}catch(PDOException $Exception){
 	die('接続に失敗しました:'.$Exception->getMessage());

}

$pdo


?>
