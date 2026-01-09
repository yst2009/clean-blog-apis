<?php 



function required($input){
    if(empty($input)){
        return true;
    }
    return false;
}

function min_input($input,$length){
    if(strlen($input) < $length){
        return true;
    }
    return false;
}