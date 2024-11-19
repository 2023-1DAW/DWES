<?php

function pontencia($base, $exponente = 2)
{
    $res = 1;
    for ($i = 0; $i < $exponente; $i++) {
        $res *= $base;
    }
    return $res;
}

function promedio(...$v)
{
    if (empty($v)) {
        return false;
    }
    $sum = 0;
    for ($i = 0; $i < count($v); $i++) {
        $sum += $v[$i];
    }
    $media = $sum / count($v);
    return $media;
}
