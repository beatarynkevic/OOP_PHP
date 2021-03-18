<?php

class Bebras extends River {


    public function __construct()
    {
        echo '<br>';
        echo 'Konstruojam bebra';
        $this->letsEat();
    }

    public function saySomething(string $words)
    {
        foreach(range(1, 42) as $_) {
            echo $words;
        }
    }
}

?>
<!-- DEL NAMU DARBU 
    funkcijos-tai metodai;
    saskaitos klase ir turi daug savybiu(name, surname, id nr);
    du objektai saskaita ir json : saskaitos ir aplikacijos + saskaitos objekta i dvi dalis. viena dalis saskaitos funkcionalumas
    Bendrinis objektas, apibudina visa aplikacija. dvi klases su skirtingais objektais, saskaita ir irasinetojas i json.
 -->