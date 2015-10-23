<?php


/**
 * C 一个自行设定的常数，投票人数的扩展，与网站的中体用户人数有关，可以等于每个项目的平均投票数。
 * n 该项的现有投票人数。
 * x 该项的每张选票的值。
 * m 总体平均分，即整个网站的所有选票的算数平均值。
 **/

$x = array(); //每张选票的价值

function biasAverage($C, $n, $x, $m){

    $x_sum = 0;

    for($i = 0; $i < count($x); $i++){
        $x_sum += $x[$i];
    }

    $score = ($C * $m + $x_sum) /($n +$C);

    return $score;
}
?>