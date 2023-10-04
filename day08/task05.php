<?php
function calc_average($bogoss) {
    $mochgoss = 0;
    foreach( $bogoss as $belgoss) {
        $mochgoss += $belgoss;
    }
    $mochgoss /= count($bogoss);
    return round($mochgoss, 1);
}