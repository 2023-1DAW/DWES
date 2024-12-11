<?php

function factorial($valor): int
{
    if ($valor < 0) {
        return -1;
    }
    $resultado = 1;
    for ($i = 1; $i <= $valor; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

function securizar($d){
    return htmlspecialchars(stripslashes(trim($d)));
}