<?php

/*

3．以下の機能を持つクラスを作成してください。
　　　・パブリックな２つの変数
　　　・２つの変数に値を設定するパブリックな関数
　　　・２つの変数の中身をechoするパブリックな関数

*/

class Human {

    //パブリックな２つの定数
    public $name = '';
    public $age = 0;

    //二つの変数の値を設定するパブリックな関数
    public function setname($name){
      $this->name =(string)filter_var($name);

    }
    public function setage($age){
      $this->age =(string)filter_var($age);

    }

    //２つの変数の中身をechoするパブリックな関数
    echo $name->getname();
    echo $age->getage();

}

?>
