<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Mira
 */

require_once(dirname(__FILE__) . "/../connectDB/config.php");
require_once(dirname(__FILE__) . "/../connectDB/dbConnect.php");

class User extends dbConnect{
    
    public function getAllUsers(){
        $query = "select * from user ";
        $mysqlconnection = $this->getConnection();
        $result = mysqli_query($mysqlconnection, $query);
        $this->closeConnection($mysqlconnection);
        if($result){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        else{
           return array();
        }
}

    public function usersAvailable(){
       return count($this->getAllUsers()) > 0 ? true : false;
    }

    public function getUser($username){
        $query = "SELECT * FROM `user` where `username` = '$username'";
        $mysqlconnection = $this->getConnection();
        $result = mysqli_query($mysqlconnection, $query);
        $this->closeConnection($mysqlconnection);
        
        if($result){
            $result = mysqli_fetch_assoc($result);
        }
        else{
            $result = array();
        }
        return $result;
    }
    
    public function isUsers($username){
        return count($this->getUser($username)) ? true : false;
    }
    
    public function getAllCandidate(){
        $query = "select CONCAT(first_name, ' ', last_name) as username from user where role_id = 3 ";
        $mysqlconnection = $this->getConnection();
        $result = mysqli_query($mysqlconnection, $query);
        $this->closeConnection($mysqlconnection);
        if($result){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        else{
           return array();
        }
    }
    
    public function getAllRiviewer(){
        $query = "select CONCAT(first_name, ' ', last_name) as username from user where role_id between 1 and 2; ";
        $mysqlconnection = $this->getConnection();
        $result = mysqli_query($mysqlconnection, $query);
        $this->closeConnection($mysqlconnection);
        if($result){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        else{
           return array();
        }
    }

}
