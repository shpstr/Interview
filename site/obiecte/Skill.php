<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Skill
 *
 * @author Mira
 */

require_once(dirname(__FILE__) . "/../connectDB/config.php");
require_once(dirname(__FILE__) . "/../connectDB/dbConnect.php");


class Skill extends dbConnect{
    
    public function getAllSkill(){
        $query = "select * from category  ";
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
