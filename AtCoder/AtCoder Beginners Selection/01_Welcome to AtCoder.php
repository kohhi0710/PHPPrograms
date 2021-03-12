<?php

//整数の入力
//変数aに標準入力の値を入力
fscanf(STDIN,"%d",$a); //a = 1

//スペース区切りの整数の入力
//スペースで区切ったそれぞれの値を変数b、cに入力
fscanf(STDIN,"%d %d",$b,$c); //b = 2
                             //c = 3

//文字列の入力
fscanf(STDIN,"%s",$s); //s = test

//出力
//"\n"で改行を出力
echo($a+$b+$c). " ".$s."\n"; //6 test

?>