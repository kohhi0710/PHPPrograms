<?php

$n = fgets(STDIN);
$num = []; //��z���錾

//���`�������Ԃ񃋁[�v
for($i = 0; $i < $n; $i++)
{
    //�z��ɕW�����͂̒l��ǉ����Ă���
    $num[] = fgets(STDIN);
}

//array_unique:�z��ŏd�����Ă���l���������A�S�Ĉ�ӂ̒l�ɂ���
//��ӂ̒l���������݂��邩��count�ŎZ�o����
echo count(array_unique($num));
?>