<?php

namespace App;

class NodeAdapter implements Adapter
{
    public function request(string $url): Promise
    {
        $prom = new Promise();
        $prom->setUrl($url);

        return $prom;
    }
}
