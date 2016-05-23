<?php

//課題4:前回の課題1で作成したテーブルからprofileID=1の情報を取得し、画面に取得した情報を表示してください


//tyr~catchで囲んでおくことで、その間のエラーを取得＆表示

try{
$pdo = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuya','password');
}catch(PDOException $Exception){
 	die('接続に失敗しました:'.$Exception->getMessage());
}

$sql = "select * from profiles where profilesID=1" ;
$query = $pdo -> prepare($sql);
$query -> execute();
$result = $query -> fetchall(PDO::FETCH_ASSOC);
var_dump($result); //結果を画面に表示する
?>
