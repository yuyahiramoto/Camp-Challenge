<?php

//課題5：nameに「茂」を含む情報を取得し、画面に取得した情報を表示してください
try{
$pdo = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuya','password');
}catch(PDOException $Exception){
 	die('接続に失敗しました:'.$Exception->getMessage());
}

$sql = "select * from profiles where name like '%実%'";
$query = $pdo -> prepare($sql);
$query -> execute();
$result = $query -> fetchall(PDO::FETCH_ASSOC);
var_dump($result); //結果を画面に表示する

?>
