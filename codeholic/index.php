<?php 
define('DIR', __DIR__.'/');

require DIR.'Car.php';
require DIR.'Doors.php';
require DIR.'Maserati.php';
require DIR.'Mazda.php';

echo '<pre>';

$maserati = new Maserati('MC20', 'Blue', 1500, 2020, 402);
$mazda = new Mazda('MX-5 Miata', 'Red', 1015, 2000, 191);

// echo "<h1 style='color:blue';>$maserati->color</h1>";

$maserati->gearbox('automatic');
$mazda->gearbox('manual');
$mazda->doors(2);

print_r($maserati);
print_r($mazda);

echo '<h1 style="color:blue";> Maserati mc20 max speed per km/h:'.$maserati->get_max_speed().'</h1>';
echo '<h1 style="color:red";> Maserati mc20 max speed per km/h:'.$mazda->get_max_speed().'</h1>';
?>