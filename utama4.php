<?php
//require_once 'hewan.php';
//require_once 'orang.php';
//
spl_autoload_register(function ($class_name){
    include $class_name.'.php';
});


//static
//orang::bersuara();
//echo orang::$suara;


//var_dump($robothewan);


//methode chaning

$robot = new robot('testing',10);
$robot->setSuara('OK mhe')->setBerat(78000);

echo $robot;
        

