<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbConnect
 *
 * @author Mira
 */
class dbConnect {
    public function getConnection() {
        require_once('config.php');
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
    
    public function closeConnection($link){
        mysqli_close($link);
    }
}
