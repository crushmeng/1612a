<?php
echo Sum_Solution(5);
function Sum_Solution($n)
{
    if ($n==1)
    {
        return 1;
    }
    return $n+Sum_Solution($n-1);
}