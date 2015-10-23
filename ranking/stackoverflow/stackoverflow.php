<?php


$date_ask = mktime(0,0,0,0,0,0); //问题提问时间

$date_active = mktime(0,0,0,0,0,0); //最后一次问题的提问时间

$qAge = round(time() - $date_ask, 1);
$qUpdated = round(time() - $date_active,1);




function stackOverflow($qViews, $qAnswers, $qScore, $qAscores, $qAge, $qUpdated){

    $dividend = (log10($qViews) * 4) + (($qAnswers * $qScore)/5) + $qAscores;

    $divisor = pow((($qAge + 1) - ($qAge - $qUpdated)/2), 1.5);

    return $dividend/$divisor;
}

?>