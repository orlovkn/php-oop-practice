<?php

$nums = [1,1,1,1,1,1,1,1,1,1];
$target = 1;
$start = 0;

function getMinDistance($nums, $target, $start)
{
    $default = 10000;
    for ($i = 0; $i < sizeof($nums); $i++) {
        if ($nums[$i] === $target) {
            $default = min($default, abs($i - $start));
        }
    }
    /*foreach ($nums as $i => $n) {
        if ($n === $target) {
            $default = min($default, abs($i - $start));
        }
    }*/

    return $default;
}

print_r(getMinDistance($nums, $target, $start) . PHP_EOL);
