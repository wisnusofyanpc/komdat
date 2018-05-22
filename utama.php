<?php

require_once 'hewan.php';

$robot1 = new robot('suara 1',10);
$robot1->setBerat(30);

$robothewan = new robot_hewan('robot Hewan',100);

echo 'bunyi robot 1 :'.$robot1->getSuara().' dan beratnya adalah '.$robot1->getBerat().'<br>';

echo $robothewan->getSuara().'<br>';
echo $robothewan->getKekuatan();




//var_dump($robothewan);


