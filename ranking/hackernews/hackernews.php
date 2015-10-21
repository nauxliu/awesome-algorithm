<?php

/**
 * hackernews 网站的排名算法，php 的实现
 * @param $p 帖子得票数
 * @param $t 发帖时间
 * @param $g 重力因子
 */
function hackernews($p, $t, $g){

    $score = ($p -1) / pow(($t +2 ), $g);

    return $score;
}

?>