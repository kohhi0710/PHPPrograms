<?php

$n = fgets(STDIN);
$num = []; //空配列を宣言

//モチも枚数ぶんループ
for($i = 0; $i < $n; $i++)
{
    //配列に標準入力の値を追加していく
    $num[] = fgets(STDIN);
}

//array_unique:配列で重複している値を消去し、全て一意の値にする
//一意の値がいくつ存在するかをcountで算出する
echo count(array_unique($num));
?>