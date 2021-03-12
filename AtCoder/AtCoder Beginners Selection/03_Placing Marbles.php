<?php
fscanf(STDIN,"%s",$a);

//substr_count:指定した文字列が出現する回数をカウント
//a = 101の場合、1が2回出現するので2を返す
echo substr_count($a,1);
?>