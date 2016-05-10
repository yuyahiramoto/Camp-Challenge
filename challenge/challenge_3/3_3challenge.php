<?php

/*

課題3:引き数が3つの関数を定義する。1つ目は適当な数値を、2つ目はデフォルト値が5の数値を、最後はデフォルト値がfalse(bool値)の$typeを引き数として定義する。1つ目の引き数に2つ目の引き数を掛ける計算をする関数を作成し、$typeがfalseの時はその値を表示、trueのときはさらに2乗して表示する。
　例）function sample($□□□, $△△△, $type) // 引数が３つの関数書き出し部分(デフォルト値なし)

*/

//関数名、変数名によく使用する英単語 http://d.hatena.ne.jp/knowledgefort/20111029/1319853730


function calc($num1, $num2 = 5, $type = false){ // calc 計算する、算出するの意

    $multi = $num1 * $num2;  // *(アスタリスク) 乗算  // multi 乗算の意
    if($type == false){ //$type = false ならば  比較演算子 == 等しい
        echo $multi; //$num1 * $num2の結果($multi)を表示する　
    }else{ //$type = trueの場合は
        echo $multi * $multi; //$multiを2乗する
    }

}

calc(10,5,false); // functon calc()へ



?>
