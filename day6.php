<?php
nm(1,13);
function nm ($n,$m){
    $fzc = range($n,$m);
    echo substr_count(join($fzc),'1');
}
