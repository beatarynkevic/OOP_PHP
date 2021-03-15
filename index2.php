<?php
class Car {
    public $wheels = 4;
    public $brand;
    public $color;
    public $gearbox;

    public function __construct($brand, $color, $gearbox) {
        $this->brand = $brand;
        $this->color = $color;
        $this->gearbox = $gearbox;

        echo 'the constructor ran..';
    }


}

$carVolvo = new Car('Volvo', 'black', 'manual');
$carOpel = new Car('Opel', 'red', 'automatic');
$carSeat = new Car('Seat', 'silver', 'manual');

echo '<pre>';
print_r($carVolvo);
print_r($carOpel);
print_r($carSeat);
echo '</pre>';



?>

<!-- PHP OOP - Beginners Crash Course -->
<!-- https://www.youtube.com/watch?v=dQxuYRNbL_M -->