<?php

$MIN_YEAR = intval(date("Y"))-100;
$MAX_YEAR = intval(date("Y"));

function validateInput($input){
    foreach($input as $num){
        if(!is_int($num) ||  ($num<$MIN_YEAR || $num>$MAX_YEAR)){
            return 0;
        }
    }
    return 1;
}

?>