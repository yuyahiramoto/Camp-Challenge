<?php

// ８．ファイルに自己紹介を書き出し、保存してください。
//９．ファイルから自己紹介を読み出し、表示してください。


$fp = fopen('intro.txt','w');
fwrite($fp, 'はじめまして。平本裕也です。');
fclose($fp);

$fp = fopen('intro.txt','r');
$file_txt = fgets($fp);
echo $file_txt.'<br>';

?>
