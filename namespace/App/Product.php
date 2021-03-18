<?php
namespace App;

class Product {
    public function __construct() {
        $this->greeting();
    }

    public function greeting() {
        echo '<h3 style="color: navy;"> Labas is App\Product</h3>';
    }
}

?>