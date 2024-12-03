<?php 

function securizar($d){
    return htmlspecialchars(stripslashes(trim($d)));
}