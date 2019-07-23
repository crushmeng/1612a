<?php
$str = 'aabbccydYdeexffgghhi';
function dd($str)
{
    $arr = str_split($str);
    foreach ($arr as $k=>$v)
    {
        if (substr_count($str,$v)==1)
        {
            return $k;
        }
    }
}
print_r(dd($str));