<?php

$n = fgets(STDIN); //n = 2
$a = explode(" ",trim(fgets(STDIN))); //a = [3,1]

//rsort:�z����t���\�[�g����
rsort($a); //a = [3,1]

$sum = 0;

//n���Ԃ񃋁[�v����
for($i = 0; $i < $n; $i++)
{
    //2�Ŋ���؂��(=Alice�̎��)
    if($i % 2 == 0)
    {
        //�z��̒l(Alice�̓_��)�����Z
        $sum += $a[$i];
    }
    else //Bob�̎��
    {
        //Bob�̓_�������Z
        $sum -= $a[$i];
    }
}

//���v���o��
print $sum;

?>