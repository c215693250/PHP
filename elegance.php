<?php
$x=$_GET["r"];
function shu($r)
{
    $ji=0;
    for($x=0;$x<=$r;$x++)
    {
        for($y=0;$y<=$r;$y++)
        {
            if ($y * $y + $x * $x == $r * $r)
            {
                $ji++;
            }
        }
    }
    return $ji=4*$ji-4;
}
$a=shu($x);
echo $a;
?>

