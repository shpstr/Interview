<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once(dirname(__FILE__) . "/../obiecte/User.php");

@session_start();
$objUser = new User();
if(!array_key_exists("username",$_SESSION )) {

    
    if ($objUser->usersAvailable()){
        
            header("Location: /ACI-SITE/site/signin/login.php");
    }
    else{
        header("Location: /ACI-SITE/site/view/CreateAccount.php");
        exit();
    }
    
}

