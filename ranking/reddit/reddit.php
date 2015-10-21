<?php

$t = time() - mktime(43, 46, 7, 8, 12, 2005);
$x = $agree - $unagree;

if(x > 0){
    $y = 1;
}else if(x < 0){
    $y = -1;
}else if(x == 0){
    $y = 0;
}

$z = (x == 0) ? 1 : abs(x);

function reddit($t, $x, $y, $z){
    $score = log($z, 10) + $y * $t / 45000;
}
?>