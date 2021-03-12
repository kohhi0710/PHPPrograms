<?php

$n = fgets(STDIN); //n = 2
$a = explode(" ",trim(fgets(STDIN))); //a = [3,1]

//rsort:配列を逆順ソートする
rsort($a); //a = [3,1]

$sum = 0;

//n枚ぶんループする
for($i = 0; $i < $n; $i++)
{
    //2で割り切れる(=Aliceの手番)
    if($i % 2 == 0)
    {
        //配列の値(Aliceの点数)を加算
        $sum += $a[$i];
    }
    else //Bobの手番
    {
        //Bobの点数を減算
        $sum -= $a[$i];
    }
}

//合計を出力
print $sum;

?>