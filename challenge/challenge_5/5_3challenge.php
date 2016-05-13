<?php

// ３．クッキーに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。

if(!empty($_COOKIE['last_access_time'])){
    $last_accessTime = $_COOKIE['last_access_time'];
}

$accessTime = date('H時i分s秒');
setcookie('last_access_time',$accessTime);

echo '前回のアクセス時刻:'.$last_accessTime;


?>
