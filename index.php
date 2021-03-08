<?php
include __DIR__.'/Bebras.php';
include __DIR__.'/Udra.php';

$objektas= new Bebras;
$obj2 = new Bebras;
$obj3= new Udra;

$objektas->tail = "Small";
echo $objektas->tail;

$objektas->sayTail();
$objektas->getAge();
?>