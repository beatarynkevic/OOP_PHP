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



class Greeting {

    public static function sayHello($language) {
        if($language === 'en') {
            echo "<h1>Hello World</h1>";
        } elseif ($language === 'lt') {
            echo "<h1 style='color:pink';>Labas rytas</h1>";
        } elseif ($language === 'pl') {
            echo "<h1 style='color:blue';>Dzień Dobry</h1>";
        } elseif ($language === 'es') {
            echo "<h1 style='color:yellow';>Buenos dias</h1>";
        } elseif($language === 'rus') {
            echo "<h1 style='color:green';>Здравствуйте</h1>";
        } else {
            echo "<h1 style='color:red';>IDK what language is, sorry</h1>";
        }
    }
}

Greeting::sayHello('lt');
?>
