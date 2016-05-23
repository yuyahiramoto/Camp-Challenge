<?php

/*
．3のクラスを継承し、以下の機能を持つクラスを作成してください。
　　　・２つの変数の中身をクリアするパブリックな関数
*/

class driver extends Human{
  public function operation() //運転する
}
class passenger extends Human{
  public function ride() //乗車する
  public function pay_fare() //運賃を支払う
}

$kashima = new driver();
$kashima->setHuman{'kashima',35,};
$tanaka->operation();

?>
