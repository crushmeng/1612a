<?php
echo  day18();
function day18()
{
    $num = 10;
    $res = decbin($num);
    echo substr_count($res,'1');
}