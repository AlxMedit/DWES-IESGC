<?php
/** 
 * 1. Almacena tres números en variables y escribirlos en pantalla de manera ordenada.
 * @author Alex Abad
 * @date 26/09/2024
 */

$a = 1;
$b = 2;
$c = 3;

if ($a < $b && $a < $c) {
    if ($b < $c) {
        echo "$a, $b, $c";
    } else {
        echo "$a, $c, $b";
    }
} elseif ($b < $a && $b < $c) {
    if ($a < $c) {
        echo "$b, $a, $c";
    } else {
        echo "$b, $c, $a";
    }
} else {
    if ($a < $b) {
        echo "$c, $a, $b";
    } else {
        echo "$c, $b, $a";
    }
}