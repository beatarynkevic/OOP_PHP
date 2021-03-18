<?php

class Udra extends River implements Miskas, Giria {


    public function __construct()
    {
        parent::__construct();
        echo '<br>';
        echo 'Konstruojam udra';
        $this->letsEat();
    }

    public function letsEat()
    {
        echo '<br>Niam Niam Niam Niam Niam Niam Niam Niam</br>';
    }

    public function saySomething(string $words)
    {
        foreach(range(1, 42) as $_) {
            echo $words;
        }
    }

    public function abstrakti_funkcija(string $a1) : void{}

    public function abstrakti_funkcija2(string $a1) : void{}

}

//abstrakti klase turi abstraktu metoda
//abstraktus metodas nueturi kumo