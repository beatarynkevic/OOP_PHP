<?php

abstract class River extends Eat {

    protected $river;
    private $gold = 400;

    public function __construct()
    {
        echo '<br>';
        echo 'Konstruojam RIVERI';
        $this->saySomething('meow');
    }

    public function setRiver($river)
    {
        $this->river = $river;
    }

    abstract protected function saySomething(string $words);
}

// abstraktu metoda turi PARENT. Child'e, turi buti tas metodas, su tais paciais parametrais(argumentais)
// tik darasom ka tas metodas daro;