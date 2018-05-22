<?php

require_once 'hewan.php';
require_once 'orang.php';

$robot = new robot('suara robot yuaaammmm',10);
echo 'suara: '.$robot->getSuara().'<br>';

$robot2 = new robot_hewan('suara robot 2...',100);
echo $robot2->testing();




//var_dump($robothewan);


