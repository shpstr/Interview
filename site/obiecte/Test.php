<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Test
 *
 * @author Mira
 */

require_once(dirname(__FILE__) . "/../connectDB/config.php");
require_once(dirname(__FILE__) . "/../connectDB/dbConnect.php");

class Test extends dbConnect{
    
    public function addAssignTest($candidate_id, $reviewer_id, $skill_id, $time){
        
        $query = "INSERT INTO `test_assignation` (candidate_id, reviewer_id, skill_id, time) "
            . "VALUES ('$candidate_id', '$reviewer_id', '$skill_id', '$time')";
        $mysqlconnection = $this->getConnection();
        $testAdded = mysqli_query($mysqlconnection, $query);
        $this->closeConnection($mysqlconnection);
        return $testAdded;

    }
}
