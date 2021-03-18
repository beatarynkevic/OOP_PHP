<?php
namespace Miskas\Didelis;
use Miskas\Mazas\Grybas;

class Krepsys {

    private $yra = 0;
    const TALPA = 500; //visos stacios, gali buti protected arba private

    public function deti(Grybas $grybas) : bool
    {
        if($grybas->valgomas && !$grybas->sukirmijes) {
            $this->yra = $this->yra + $grybas->svoris;
        }
        return self::TALPA >= $this->yra;
    }

    public function get_grybu_kieki() {
        return $this->yra;
    }

}




?>