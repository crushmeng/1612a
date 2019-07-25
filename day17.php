<?php
echo "<pre>";
echo index();
function index()
{
    $A = [1,3,6,9];
    $B = [2,4,5,8,20];
    $arr = array_merge($A,$B);
    $a = count($arr);
    for ($j=0;$j<$a-$j;$j++)
    {
        for ($i=0;$i<$a-1;$i++)
        {
            if ($arr[$i]>$arr[$i+1])
            {
                $b = $arr[$i];
                $arr[$i] = $arr[$i+1];
                $arr[$i+1] = $b;
            }
        }
    }
    print_r($arr);
}