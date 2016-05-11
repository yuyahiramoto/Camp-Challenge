<?php

/*

課題6:名前による検索プログラムを実装する。
3人分のプロフィール(項目は課題5参照)をあらかじめ定義しておく。引き数にそれらのプロフィールと文字列をとり、戻り値は1人分のプロフィール情報を返却する。
引き数の文字が名前に含まれる(部分一致)プロフィール情報(複数名合致する場合は最初のプロフィールとする)を戻り値として返却する。それ以降などは課題5と同じ扱いに

*/

function profile($user){ //3人分のプロフィールをユーザー定義関数として作成 引数に $user を指定
    //user1
    $id1 = 98265;
    $name1 = '山本雄太';
    $birthday1 = '1974/01/18';
    $address1 = '東京都 三鷹市';

    $user1 = array('ID' =>$id1, '名前' => $name1, '生年月日' => $birthday1, '住所' => $address1); //複数の変数を配列に格納
    // user2
    $id2 = 70564;
    $name2 = '立花ゆい';
    $birthday2 = '1996/02/22';
    $address2 = '神奈川県 横須賀市';

    $user2 = array('ID' =>$id2, '名前' => $name2, '生年月日' => $birthday2, '住所' => $address2);
    // user3
    $id3 = 19892;
    $name3 = '中山雄一郎';
    $birthday3 = '1994/11/12';
    $address3 = '北海道 札幌市';

    $user3 = array('ID' =>$id3, '名前' => $name3, '生年月日' => $birthday3, '住所' => $address3);

    switch(true){
        case strstr($name1, $user):
            return $user1;
            break; //処理を抜ける記述
        case strstr($name2, $user):
            return $user2;
            break;
        case strstr($name3, $user):
            return $user3;
            break;
        default: //既定の処理
            echo '該当ユーザーなし<br>';
            return "";
            break;
    }
}

$user = '中';
if(profile($user) != null){
    foreach(profile($user) as $key => $value){
        echo $key.':'.$value."<br>"; // 改行しながら値を表示
                                     // foreach文http://php-beginner.com/reference/control/foreach.html
    }
}

?>
