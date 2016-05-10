<?php

//課題5:戻り値としてある人物のid(数値),名前,生年月日、住所を返却し、受け取った後は全情報を表示する

function profile(){
    $id = 1192;
    $name = '平本裕也';
    $birth = '1993年2月12日';
    $address = '神奈川県　横浜市　神奈川区　羽沢町';
    return array('ID' =>$id, '名前' => $name, '生年月日' => $birth, '住所' => $address); //関数から、複数の戻り値を、連想配列で返す http://alphasis.info/2012/07/php-functions-user-defined-return-associative-array/
}
foreach(profile() as $key => $value){ //foreach文でキーと値を取り出す http://www.phpbook.jp/tutorial/for/index9.html
    echo $key.':'.$value."<br>";
}

?>
