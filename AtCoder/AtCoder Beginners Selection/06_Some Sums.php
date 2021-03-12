<?php

fscanf(STDIN,"%d%d%d",$N,$a,$b);

$c = 0;

for($i = 0; $i <= $N; $i++)
{
    //array_sum:”z—ñ‚Ì‡Œv‚ğZo
    //str_split:•¶š—ñ‚ğ”z—ñ‚É•ÏŠ·‚·‚é
    //N‚Ì’l‚ÌŠeŒ…‚Ì˜a‚ğZo‚·‚é
    //ex)i = 12‚Ìê‡Asum = 3
    $sum = array_sum(str_split($i));

    //sum‚ªaˆÈã‚©‚ÂbˆÈ‰º‚Ìê‡
    if($sum >= $a && $sum <= $b)
    {
        //c‚Éi‚ğ‰ÁZ‚·‚é
        $c += $i;
    }
}

echo $c;

?>