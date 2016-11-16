<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once(dirname(__FILE__) . "/../connectDB/config.php");
require_once(dirname(__FILE__) . "/../connectDB/dbConnect.php");

class Role extends dbConnect {
    
    
    public function getRole($username){
        $query = "SELECT role_id FROM `user_role` LEFT JOIN `user` ON `user_role`.`id`=`user`.`role_id` WHERE `user`.`username` = '$username' ";
        $mysqlconnection = $this->getConnection();
        $result = mysqli_query($mysqlconnection, $query);
        $this->closeConnection($mysqlconnection);
        
        if($result){
            $result = mysqli_fetch_assoc($result);
            $row = $result['role_id'];
        }
        else{
            $result = array();
        }
        return $row;
    }
    
    public function isAdmin($username){
        if ($this->getRole($username) == 'Administrator')
                return true;
        else return false;
      
    }
    
    public function isCandidat($username){
        if ($this->getRole($username) == 'Candidate')
                return true;
        else return false;       
    }
    
   

}


