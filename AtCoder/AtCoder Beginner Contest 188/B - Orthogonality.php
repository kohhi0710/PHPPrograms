<?php

//2 つの N 次元ベクトル A=(A1,A2,A3,…,AN),B=(B1,B2,B3,…,BN) が与えられます。
//A と B の内積が 0 かどうかを判定してください。
//すなわち、A1B1+A2B2+A3B3+⋯+ANBN=0 かどうかを判定してください。

fscanf(STDIN,"%d",$n);

$vectorA = explode(" ",trim(fgets(STDIN)));
$vectorB = explode(" ",trim(fgets(STDIN)));

$sum = 0;
$i = 0;

while($i < $n)
{
    $sum += $vectorA[$i] * $vectorB[$i];
    $i++;
}

echo $sum === 0 ? "Yes":"No";
?>