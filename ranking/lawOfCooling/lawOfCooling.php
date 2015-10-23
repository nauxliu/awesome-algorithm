<?php

/**
 * 牛顿冷却定理的排名算法
 * 如果用户点赞， $T0 加 1
 **/
function lawOfCooling($T0, $t0, $α, $t){

    $T = $T0 * pow(e, -$α($t - $t0));

    return $T;
}
?>