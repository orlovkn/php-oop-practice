<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

$data = [
    'one' => 'uno',
    'two' => 'dois'
];
//$json = new \App\Format\JSON();
$xml = new \App\Format\XML();

$serializer = new \App\Serializer($xml);
$serializeData= $serializer->serialize($data);

print_r($serializeData);