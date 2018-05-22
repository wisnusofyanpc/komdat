<?php

class robot

{
    //public, protected, private
    
    


    //properti
    public $suara;
    public $berat;
    
    //constrcu
    
    public function __construct($suara, $berat) {
        
        $this->suara = $suara;
        $this->berat = $berat;
        
    }

    //metode set dan get
    
    public function setSuara($suara){
        $this->suara = $suara;
        return $this;
    }
    
    public function getSuara(){
        return $this->suara;
    }
    
    public function setBerat($berat){
        $this->berat = $berat;
        
    }
    
    public function getBerat(){
        return $this->berat;
        
    }
    
    public function __toString() {
        return 'ini adalah nama kelas';
    }


    
}



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

