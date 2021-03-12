<?php

//入力例
//2
//1 4 2 5

$n = trim(fgets(STDIN)); //2
$a = explode(" ",trim(fgets(STDIN))); //[1,4,2,5]
$f = [];
$g = [];

//Nの2倍の回数ループ
for($i = 0; $i < (2 ** $n); $i++)
{
    if($i < (2 ** $n) / 2)
    {
        $f[$i] = $a[$i];
    }
    else
    {
        $g[$i] = $a[$i];
    }
}

//arsort:キーと要素の関係性を維持しつつ配列を逆順ソートする
arsort($f);
arsort($g);

if(current($f))
{
    echo array_keys($f)[0] + 1;
}
else
{
    echo array_keys($g)[0] + 1;
}

?>