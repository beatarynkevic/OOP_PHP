<?php
namespace App\Core;

class Product {
    public function __construct() {
        $this->greeting();
    }

    public function greeting() {
        echo '<h3 style="color: pink;"> Labas is App\Core\Product</h3>';
    }
}

?>