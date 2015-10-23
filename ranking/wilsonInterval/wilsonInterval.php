<?php


$k = 1000; //赞同票
$n = 100000; // 总票数

$p = $k / $n; //赞同票的比率
$z = 1.96; //在置信水平为 95%的情况下的z统计量


function wilsonInterval($p, $n, $z){

    $part1 = $p + (1/2*$n) * $z;
    $part2 = $z * sqrt( ($p * (1 - $p))/$n + $z * $z / 4 * $n * $n );
    $part3 = 1 + $z * $z / $n;

    $score = ($part1 - $part2) / $part3;

    return $score;
}
?>