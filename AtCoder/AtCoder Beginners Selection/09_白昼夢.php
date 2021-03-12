<?php


//正規表現:https://murashun.jp/article/programming/regular-expression.html

//preg_match:正規表現を用いてマッチするかどうか調べる

//「/文字列/」が基本の形式
//「^」:直前の文字が行の先頭にある場合にマッチする　ex)^google → google...
//「(...)」:文字をひとつのグループにまとめることができる
//「|」:or条件として使用できる
//「{n,}」:直前の文字の最小桁数のみ指定できる ex)a{3,} → aaa aaaa...
//「&」:直前の文字が行の末尾にある場合マッチする ex)google& → ...google

//Trueが返された時、YESに変換して返す。FalseならNoに変換。
$result = preg_match("/^(dreamerase|dreamer|eraser|dream|erase){1,}$/", trim(fgets(STDIN))) ? 'YES' : 'NO';

echo $result;

?>