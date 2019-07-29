<?php
 function day20()
{
    echo $this->day20_2(10,10).'<br>';
    $this->day20_1(10,10);
}
function day20_1($x,$y)
{
    for ($i = 0; $i<=$x;$i++)
    {
        $f[$i][0] = 1;
    }
    for ($i = 0; $i <= $y; $i++)
    {
        $f[0][$i] = 1;
    }
    print_r($f);exit();
    for ($i = 1; $i <= $x; $i++)
    {
        for ($j = 1; $j <= $y; $i++)
        {
            $f[$i][$j] = $f[$i-1][$j]+$f[$i][$j-1];
        }
    }
    print_r($f[$x][$y]);
}
function day20_2($x,$y)
{
    if ($x == 0 && $y == 0)
        return 0;
    if ($x == 0 || $y == 0)
        return 1;
    $total = $this->day20_2($x-1,$y)=$this->day20_2($x,$y-1);
    return $total;
}