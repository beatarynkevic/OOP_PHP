<?php
include __DIR__.'/Bebras.php';
include __DIR__.'/Udra.php';

// echo Bebras::$legs = 55;
Bebras::createBebras();
$objektas= new Bebras(12);
$obj2 = new Bebras;
$obj3= new Udra;

$objektas->tail = "Small";
echo Bebras::$legs;
// echo $objektas->tail;

// $objektas->sayTail();
// $objektas->setAge(40);
// $objektas->getAge();


$objektas->$Udra;
echo $objektas->dog; //privatus metodas



echo '<pre>';
var_dump($objektas);
?>