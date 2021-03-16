<?php
include 'Krepsys.php';
include 'Grybas.php';

spl_autoload_register(function ($class) {
    $prefix = 'Foo\\Bar\\';
    $base_dir = __DIR__ . '/src/';
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
?>