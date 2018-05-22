<?php

class Kendaraan {
    
    //properti atau variabel
    var $merk;
    var $warna;
    var $pemilik;
    
    //method: function atau prosedur
    
    public function HidupkanMesin(){
        return $this->pemilik.' Menyalakan Mesin <br>';
    }
    
    public function MatikanMesin(){
        return $this->pemilik. 'Mematikan Kendaraan';
    }
    
}


