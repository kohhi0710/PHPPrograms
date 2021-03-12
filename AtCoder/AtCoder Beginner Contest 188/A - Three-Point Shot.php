<?php

//fgetsで読み込んだ値をexplodeで分割し、配列にする
$a = explode(" ",fgets(STDIN));

//配列0と1の差(絶対値で)が3以下であるかどうか？
//3以下ならYes、以上ならNo
echo abs($a[0] - $a[1]) < 3? "Yes":"No";

?>