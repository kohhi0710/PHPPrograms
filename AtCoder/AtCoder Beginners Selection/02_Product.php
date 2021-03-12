<?php

fscanf(STDIN,"%d %d",$a,$b);
$result = $a * $b;

if($result % 2 === 0)
{
    echo "Even"."\n";
}
else
{
    echo "Odd"."\n";
}
?>