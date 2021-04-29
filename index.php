<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

$user = new \App\User();
$user->setName('Ivan');

(new \App\UserAuth($user))->auth();
