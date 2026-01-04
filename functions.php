<?php
// FILE: functions.php

function max2($a, $b) {
    return ($a > $b) ? $a : $b;
}

function min2($a, $b) {
    return ($a < $b) ? $a : $b;
}

function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

function factorial($n) {
    if ($n < 0) return null;
    if ($n == 0) return 1;
    $res = 1;
    for ($i = 1; $i <= $n; $i++) $res *= $i;
    return $res;
}

function gcd($a, $b) {
    $a = abs($a); 
    $b = abs($b);
    while ($b != 0) {
        $r = $a % $b;
        $a = $b;
        $b = $r;
    }
    return $a;
}
?>