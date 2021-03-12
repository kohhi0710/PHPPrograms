<?php

fscanf(STDIN,"%d%d%d",$N,$a,$b);

$c = 0;

for($i = 0; $i <= $N; $i++)
{
    //array_sum:配列の合計を算出
    //str_split:文字列を配列に変換する
    //Nの値の各桁の和を算出する
    //ex)i = 12の場合、sum = 3
    $sum = array_sum(str_split($i));

    //sumがa以上かつb以下の場合
    if($sum >= $a && $sum <= $b)
    {
        //cにiを加算する
        $c += $i;
    }
}

echo $c;

?>