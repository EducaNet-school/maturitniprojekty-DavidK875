<?php
function checkNum($numb){
    if($numb>1){
        throw new Exception("Value too big");
    }
    return true;
}


?>