<?php
$num = [1,12,4];
$res = jineng($num);
echo $res;
function jineng($num)
{
    $data = [];
    for ($i = 0; $i < 3 ; $i++)
    {
        for ($j = 0; $j < 3 ; $j++)
        {
            for ($k = 0; $k < 3 ; $k++)
            {
                if ($num[$i] != $num[$j] && $num[$j] != $num[$k] && $num[$i] != $num[$k])
                {
                    $data[] = $num[$i].$num[$j].$num[$k];
                }
            }
        }
    }
    sort($data);
    return $data[0];
}