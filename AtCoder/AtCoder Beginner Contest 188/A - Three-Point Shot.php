<?php

//fgets�œǂݍ��񂾒l��explode�ŕ������A�z��ɂ���
$a = explode(" ",fgets(STDIN));

//�z��0��1�̍�(��Βl��)��3�ȉ��ł��邩�ǂ����H
//3�ȉ��Ȃ�Yes�A�ȏ�Ȃ�No
echo abs($a[0] - $a[1]) < 3? "Yes":"No";

?>