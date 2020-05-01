<?php
// function debug:
function debug($var){
    echo '<pre>';
        print_r($var);
    echo '</pre>';
}

//connected
function isConnected(){
    if(isset($_SESSION['membres'])){
        return true;    
    }else{
        return false;
    }
}

//admin
function isAdmin()
{
    if (isset($_SESSION['mambres']) && $_SESSION['membres' == 1]) {
        return true;
    }else{
        return false;
    }
}

