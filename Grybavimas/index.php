<?php
include 'bla\Grybas.php';
include 'Miskas\Didelis\Krepsys.php';
include 'vendor\autoload.php';

spl_autoload_register(function ($class) {
    $prefix = 'Miskas\Didelis';
    $base_dir = __DIR__ . '/bla';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

spl_autoload_register(function ($class) {
    $prefix = '';
    $base_dir = __DIR__ . '/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

$krepsys = new Miskas\Didelis\Krepsys;

while($krepsys->deti(new Miskas\Mazas\Grybas)) {}

_dc($krepsys->get_grybu_kieki());
?>

<!-- https://www.php-fig.org/psr/psr-4/examples/ 

KAD PASIZIURETI KAS PO KAPOTU -->

<!-- 
spl_autoload_register - prabunda kai kvieciu klase kurios nera




 -->