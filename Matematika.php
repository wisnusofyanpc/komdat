<?php
class Matematika {
    public $nilai1;
    public $nilai2;
    
    public function setNilai1($nilai1){
        $this->nilai1 = $nilai1;
        return $this;
    }
    
    public function getNilai1(){
        return $this->nilai1;
    }

    public function setNilai2($nilai2){
        $this->nilai2 = $nilai2;
        return $this;
    }
    
    public function getNilai2(){
        return $this->nilai2;
    }
    
    

    public function Penjumlahan(){
        return $this->getNilai1() + $this->getNilai2();
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

