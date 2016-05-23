<?php

//課題2:前回の課題1で作成したテーブルに自由なメンバー情報を格納する処理を構築してください

//tyr~catchで囲んでおくことで、その間のエラーを取得＆表示
try{
$pdo_object=
 	new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','yuya','password');
}catch(PDOException $Exception){
 	die('接続に失敗しました:'.$Exception->getMessage());

}

/*
サンプルデータ(profilesID=5,name=中村 雄太,tell=090-6421-3346,age=28,birthday=1991-02-12)を
database=challenge_dbのtable=profilesに入れる
*/

$sql = "INSERT INTO profiles(profilesID,name,tell,age,birthday)VALUES(:profilesID,:name,:tell,:age,:birthday)";
$query = $pdo_object->prepare($sql);
$query ->bindValue(':profilesID',5);
$query ->bindValue(':name','中村 雄太');
$query ->bindValue(':tell','090-6421-3346');
$query ->bindValue(':age',28);
$query ->bindValue(':birthday','1991-02-12');
$query->execute();
$result = $query->fetchall(PDO::FETCH_ASSOC);

var_dump ($result);
 ?>


?>
