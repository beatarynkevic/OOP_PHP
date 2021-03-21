<?php
class Maserati extends Car {
    protected $gearbox;
    protected $max_speed;

    public function __construct($model, $color, $weight, $year, $max_speed) {
        parent::__construct($model, $color, $weight, $year);
        $this->max_speed = $max_speed;
    }

    public function gearbox($type) {
        $this->gearbox = $type;
    }

    public function get_max_speed()
    {
        return $this->max_speed;
    }
}
?>