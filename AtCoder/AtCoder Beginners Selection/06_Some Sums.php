<?php

fscanf(STDIN,"%d%d%d",$N,$a,$b);

$c = 0;

for($i = 0; $i <= $N; $i++)
{
    //array_sum:�z��̍��v���Z�o
    //str_split:�������z��ɕϊ�����
    //N�̒l�̊e���̘a���Z�o����
    //ex)i = 12�̏ꍇ�Asum = 3
    $sum = array_sum(str_split($i));

    //sum��a�ȏォ��b�ȉ��̏ꍇ
    if($sum >= $a && $sum <= $b)
    {
        //c��i�����Z����
        $c += $i;
    }
}

echo $c;

?>