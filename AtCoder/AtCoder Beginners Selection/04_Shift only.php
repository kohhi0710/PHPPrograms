<?php
$num = fgets(STDIN);
//explode:�������Ŏw�肵��������ő������̕�����𕪊�����
$list = explode(" ",fgets(STDIN));

$min = 99;

for ($i = 0; $i < $num; ++$i)
{
    //list�̒l�������ł���(2�Ŋ��肫���)�Ƃ�
    for($j = 0; $list[$i] % 2 == 0; ++$j)
    {
        //2�Ŋ��������̂ɏ���������
        $list[$i] /= 2;
    }

    //����؂���j���C���N�������g���Ă���̂ŁA���ʂ�min�Ɣ�r���Ď擾
    $min = min($min,$j);
}

//�o��
echo $min;
?>