<?php

@session_start();
if(array_key_exists("username",$_SESSION )) {
    unset($_SESSION['username']);
}
header("Location: /ACI-SITE/site/signin/index.php");
exit();
