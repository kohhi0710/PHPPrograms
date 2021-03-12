<?php

fscanf(STDIN, "%d",$n);

for($i = 0; $i < $n; $i++)
{
    fscanf(STDIN,"%d %d %d",$t,$x,$y); //ex)3 1 2

    //t - x - yを2で割った余りが0ではない
    //かつt - x - yが0以下の場合、"No"
    if(($t - $x - $y) % 2 !== 0 || ($t - $x - $y) < 0)
    {
        echo "No";
        return;
    }
}

echo "Yes";