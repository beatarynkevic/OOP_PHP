<?php
class Bebras {
    public $tail = 'BIG';
    private $age = 23;
    public $property = "blalalal";

    public static $legs = 2;

    private $wife = "blond", $children1 = "beaver1", $children2 = "beaver3", $dog = "pufik";
    
    private $BebroObjektas;
    static public function createBebras($age)
    {
        echo 'Lets create';
        return self::$BebroObjektas ?? self::$BebroObjektas = new self($age);
    }

    public function __construct($age)
    {
        echo '<br>';
        echo 'Konstruojam: ';

        echo self::$legs;
        self::$legs = 85;

        echo '<br>';
        if(is_integer($age)) {
            $this->init($age);
        }
        if(is_string($age)) {
            $this->init2($age);
        }
        // $this->age = $age;
    }

    public function init($age)
    {
        echo '<br>';
        echo 'INIT';
        echo '<br>';
        $this->age = $age;
    }

    public function init2($age)
    {
        echo '<br>';
        echo 'INIT2';
        echo '<br>';
        $this->wife = $age;
    }

    public function __get($property)
    {
        if(!in_array($property, ['wife', 'children1'])) {
            return;
        }
        // echo "Stebuklu metas $property";
        return $this->$property;
    }

    public function __set($property, $value)
    {

        if("$age" == $property && $value > 30) {
            echo 'blogi metai';
            return;
        }

        $this->$property = $value;

    }

    public function sayTail()
    {
        echo '<br>';
        echo $this->tail;
        echo '<br>';
    }

    public function getAge()
    {
        echo '<br>';
        echo "Bebras age: ".$this->age;
        echo '<br>';
    }

    public function setAge($age)
    {
        if($age > 30) {
            echo 'blogi metai';
            return;
        }
        $this->age = $age;   
    }
}

?>

<!-- DEL NAMU DARBU 
    funkcijos-tai metodai;
    saskaitos klase ir turi daug savybiu(name, surname, id nr);
    du objektai saskaita ir json : saskaitos ir aplikacijos + saskaitos objekta i dvi dalis. viena dalis saskaitos funkcionalumas
    Bendrinis objektas, apibudina visa aplikacija. dvi klases su skirtingais objektais, saskaita ir irasinetojas i json.
 -->