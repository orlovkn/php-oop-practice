<?php

namespace App;

class AjaxAdapter implements Adapter
{
    public function request(string $url): Promise
    {
        $prom = new Promise();
        $prom->setUrl($url);

        return $prom;
    }
}
