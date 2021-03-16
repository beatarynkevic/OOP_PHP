<?php

class Weather {
    public static $tempConditions = ['cold', 'mild', 'warm'];
    
    public static function determineTempConditions($f) {
        if($f < 40) {
            return self::$tempConditions[0];
        } elseif ($f < 70) {
            return self::$tempConditions[1];
        } else {
            return self::$tempConditions[2];
        }
    }
}

echo Weather::determineTempConditions(50);

?>