<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

//print_r("Simple Service Container\n\n");

$kernel = (new \App\Kernel())->boot();
$kernel->handleRequest();
