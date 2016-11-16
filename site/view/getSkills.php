<?php
//    error_reporting(0);
//    xdebug_disable();
define("MYSQL_USER", "root");
define("MYSQL_PASSWORD", "");
define("DATABASE", "aci");
define("MYSQL_HOST", "localhost");


function getConnection() {
        $link = mysqli_init();
        if (!$link) {
            die('mysqli_init failed');
        }

        if (!mysqli_real_connect($link, MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, DATABASE)) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        }

        return $link;
    }
    
   function closeConnection($link){
        mysqli_close($link);
    }

    $c = '';
    switch($_POST['categ']) {
        case 'Java':
            $c = 1;
            break;
        case 'MsSQL':
            $c = 2;
            break;
        case 'C++':
            $c = 3;
            break;
    }
    
    
    $resStr = '';
     $query = "select name from skill where category_id = $c";
        $mysqlconnection = getConnection();
        $result = mysqli_query($mysqlconnection, $query);
        closeConnection($mysqlconnection);
        while($rs = mysqli_fetch_assoc($result)) {
            $row = $rs['name'];
            $resStr .= $row."\n";
        }
        echo $resStr;

        
?>