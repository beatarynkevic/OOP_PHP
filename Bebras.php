<?php
class Bebras {
    public $tail = 'BIG';
    private $age = 23;

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
}

?>

<!-- DEL NAMU DARBU 
    funkcijos-tai metodai;
    saskaitos klase ir turi daug savybiu(name, surname, id nr);
    du objektai saskaita ir json : saskaitos ir aplikacijos + saskaitos objekta i dvi dalis. viena dalis saskaitos funkcionalumas
    Bendrinis objektas, apibudina visa aplikacija. dvi klases su skirtingais objektais, saskaita ir irasinetojas i json.
 -->