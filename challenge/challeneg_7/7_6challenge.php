<?php

//課題6:課題2でINSERTしたレコードを指定して削除してください。SELECT*で結果を表示してください


try{
$pdo = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuya','password');
}catch(PDOException $Exception){
 	die('接続に失敗しました:'.$Exception->getMessage());
}

$sql = "delete from profiles where name = '中村 雄太' ";
$query = $pdo -> prepare($sql);
$query -> execute();
$sql2 = "select * from profiles ";
$query2 = $pdo -> prepare($sql2);
$query2 -> execute();
$result = $query2 -> fetchall(PDO::FETCH_ASSOC);
var_dump($result);


?>
