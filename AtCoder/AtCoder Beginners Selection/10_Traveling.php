<?php

fscanf(STDIN, "%d",$n);

for($i = 0; $i < $n; $i++)
{
    fscanf(STDIN,"%d %d %d",$t,$x,$y); //ex)3 1 2

    //t - x - y��2�Ŋ������]�肪0�ł͂Ȃ�
    //����t - x - y��0�ȉ��̏ꍇ�A"No"
    if(($t - $x - $y) % 2 !== 0 || ($t - $x - $y) < 0)
    {
        echo "No";
        return;
    }
}

echo "Yes";