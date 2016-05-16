<?php

//課題９

//プロフィール１

$user1 = array("id"=>"1192",
             "name"=>"山田",
             "birth"=>"1990/09/15",
             "add"=>"北海道");

//プロフィール２
$user2 = array("id"=>"1945",
             "name"=>"佐藤",
             "birth"=>"1993/02/11",
             "add"=>"名古屋");

//プロフィール３
$user3 = array("id"=>"1986",
             "name"=>"鈴木",
             "birth"=>"1989",
             "add"=>"鹿児島");

$all = array($user1, $user2, $user3);
foreach ($all as $value){
      foreach ($value as $key2 => $value2) {
         if($key2 == "name"){
           echo "$key2:$value2"."<br>";
         }elseif($key2 == "birth"){
           echo "$key2:$value2"."<br>";
         }else {
           continue;
         }

    }
}

?>
