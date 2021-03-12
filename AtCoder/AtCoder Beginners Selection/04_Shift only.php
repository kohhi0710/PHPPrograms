<?php
$num = fgets(STDIN);
//explode:第一引数で指定した文字列で第二引数の文字列を分割する
$list = explode(" ",fgets(STDIN));

$min = 99;

for ($i = 0; $i < $num; ++$i)
{
    //listの値が偶数である(2で割りきれる)とき
    for($j = 0; $list[$i] % 2 == 0; ++$j)
    {
        //2で割ったものに書き換える
        $list[$i] /= 2;
    }

    //割り切れる回数jをインクリメントしているので、結果をminと比較して取得
    $min = min($min,$j);
}

//出力
echo $min;
?>