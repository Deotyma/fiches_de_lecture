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
    if (isset($_SESSION['membres']) && $_SESSION['membres' == 1]) {
        return true;
    }else{
        return false;
    }
}

function executeRequest($request, $setting = array()){

    foreach ($setting as $key => $value) {
        $setting[$key] = htmlspecialchars($value, ENT_QUOTES);
    }

    global $pdo;

    $resultat = $pdo->prepare($request);
    $success = $resultat->execute($setting);

    if($success){

        return $resultat;

    }else{
        return false;
    }
}//end of executeRequest()

