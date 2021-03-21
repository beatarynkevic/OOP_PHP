<?php
abstract class Car {

    public $model;
    public $color;
    public $weight;
    protected $year;
    protected $gearbox;

   public function __construct($model, $color, $weight, $year) {
       $this->model = $model;
       $this->color = $color;
       $this->weight = $weight;
       $this->year = $year;
    }

    abstract public function gearbox($type);

}



?>