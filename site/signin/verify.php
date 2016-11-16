<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

require_once(dirname(__FILE__) . "/../obiecte/Role.php");
require_once(dirname(__FILE__) . "/../obiecte/User.php");

$objUser = new User();
$objRole = new Role();



if ($objUser->usersAvailable()){
    
    if ($objRole->getRole($_POST['username']) == 1){
        header("Location: /ACI-SITE/site/view/AssignTest.php"); 
        exit();
    }
    else  if ( $objRole->getRole($_POST['username']) == 2){
        header("Location: /ACI-SITE/site/view/Question.php"); 
        exit();
    }
    else  if ( $objRole->getRole($_POST['username']) == 3){
        header("Location: /ACI-SITE/site/view/userpanel.php"); 
        exit();
    }
    

}

if(!empty($_POST)) {
    $userData = $_POST;
    if(array_key_exists("username",$userData)){
        $userName = $userData['username'];
    }
    else{
        die("Wrong POST data");
    }
    if(array_key_exists("password",$userData)){
        $password = $userData['password'];
    }
    else{
        die("Wrong POST data");
    }

    $user = $objUser->getUser($userName);
    if(!empty($user)){
        if(array_key_exists("username", $user)){
            if(array_key_exists("password", $user)){
                if(md5($password) === $user['password']){
                    $_SESSION['username'] = $user["username"];
                    header("Location: /index.php");
                    exit();
                }
            }
        }
    }
}



?>