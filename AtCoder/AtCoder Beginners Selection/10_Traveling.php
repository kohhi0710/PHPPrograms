<?php

fscanf(STDIN, "%d",$n);

for($i = 0; $i < $n; $i++)
{
    fscanf(STDIN,"%d %d %d",$t,$x,$y); //ex)3 1 2

    //t - x - y‚ð2‚ÅŠ„‚Á‚½—]‚è‚ª0‚Å‚Í‚È‚¢
    //‚©‚Ât - x - y‚ª0ˆÈ‰º‚Ìê‡A"No"
    if(($t - $x - $y) % 2 !== 0 || ($t - $x - $y) < 0)
    {
        echo "No";
        return;
    }
}

echo "Yes";