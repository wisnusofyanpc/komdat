<?php

class  Person {
    
    public $nama;
    public $tinggi;
    
    public  function Berjalan(){
       echo 'Orang berjalan';
    }
    
    public function setNama($nama){
        $this->nama = $nama;
    }
}

//$person1 = new Person();
//$person1->setNama('Juan Antonio');
//echo $person1->nama;

$coba = new Person();
$coba->setNama('Antonioa');
echo $coba->nama;
echo $coba->Berjalan();


