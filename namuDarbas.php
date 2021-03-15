<!-- Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai.
Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2,
tai prideda prie metaliniaiPinigai, jeigu didesnis nei 2 prie popieriniaiPinigai. Parašykite metodą
skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. Sukurti
klasės objektą ir pademonstruoti veikimą.-->


<!-- Patobulinti 1 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje yra monetų
ir kiek banknotų. Parašyti metodą monetos, kuris skaičiuotų kiek yra piniginėje monetų ir metoda
banknotai - popierinių pinigų skaičiavimui. -->
<?php
class Pinigine {
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;

    public function ideti($kiekis) {
        if($kiekis < 2) {
            $this->metaliniaiPinigai += $kiekis;
        } else {
            $this->popieriniaiPinigai += $kiekis;
        }
    }
    public function skaiciuoti() {
        $suma = $this->metaliniaiPinigai + $this->popieriniaiPinigai;
        echo 'Pinigineje yra: '. $suma;
    }

    public function monetos() {
        return $this->metaliniaiPinigai;
    }

    public function banknotai() {
        return $this->popieriniaiPinigai;
    }
}

$nauja_pinigine = new Pinigine;
$nauja_pinigine->ideti(5);
$nauja_pinigine->ideti(10);
$nauja_pinigine->ideti(1);
$nauja_pinigine->ideti(0.5);
$nauja_pinigine->skaiciuoti();


echo '<br><br>IV punkto metodai: <br>';

echo 'Monetos: ' . $nauja_pinigine->monetos() .'<br>';
echo 'Banknotai: ' . $nauja_pinigine->banknotai();
echo "<h2 style='color: navy';>---------------------------------------------------------------------------------------------</h2>";
?>
<!-- Sukurti klasę Stiklinė. Sukurti privačią savybę tūris ir kiekis. Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis.
Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), kuris grąžiną
kiekį. Sukurti tris stiklines objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę,
o mažesnę į dar mažesnę.-->

<?php
class Stikline {
    private $turis;
    private $kiekis;

    public function setTuris($perduodamas_turis)
    {
        $this->turis = $perduodamas_turis;
    }

    public function ipilti($kiekis)
    {
        if($kiekis > $this->turis || ($this->kiekis + $kiekis) > $this->turis) {
            echo "per didelis kiekis <br>";
            $this->kiekis = $this->turis;
        } else {
            $this->kiekis += $kiekis;
        } 
    }

    public function ispilti() {
        return $this->kiekis;
    }
}

$pirma_stikline = new Stikline();
$antra_stikline = new Stikline();
$trecia_stikline = new Stikline();

$pirma_stikline->setTuris(200);
$antra_stikline->setTuris(150);
$trecia_stikline->setTuris(100);


$pirma_stikline->ipilti(200);
$antra_stikline->ipilti($pirma_stikline->ispilti());
$trecia_stikline->ipilti($antra_stikline->ipilti($pirma_stikline->ispilti()) );





echo "<h2 style='color: navy';>---------------------------------------------------------------------------------------------</h2>";
?>
<!-- Sukurti klasę Grybas. Sukurti klasę Krepsys. Grybas turi tris privačias savybes: valgomas,
sukirmijes, svoris. Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos taip:
valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45. Eiti grybauti, t.y.
Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą, kol bus pririnkta
500 svorio nesukirmijusių ir valgomų grybų.-->

<?php
class Grybas {
    private $valgomas;
    private $sukirmijes;
    private $svoris;

    public function __construct() {
        $this->svoris = rand(5, 45);

        $random = rand(1, 12);
        if($random % 2 === 0) {
            $this->valgomas = true;
            $this->sukirmijes = false;
        } else {
            $this->valgomas = false;
            $this->sukirmijes = true;
        }
    }

    public function get_valgomas() {
        return $this->valgomas;
    }

    public function get_svoris() {
        return $this->svoris;
    }
}

class Krepsys {
    public $svoris = 0;
}

$krepsys = new Krepsys;

while($krepsys->svoris <= 500) {
    $grybas = new Grybas();

    if($grybas->get_valgomas() == true) {
        $krepsys->svoris += $grybas->get_svoris();
    }
}
echo $krepsys->svoris;
echo "<h2 style='color: navy';>---------------------------------------------------------------------------------------------</h2>";
?>