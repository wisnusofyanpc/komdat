<?php
require 'robot.php';
class robot_hewan extends robot {
    
    public function getKekuatan(){
        echo 'sya bisa berenang';
    }
    
     public function getSuara(){
        return 'suaranya ini terting '.$this->suara;
    }
    //self dan pareent
    public function testing(){
        return parent::getSuara();
    }
    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

