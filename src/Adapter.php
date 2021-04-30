<?php

namespace App;

interface Adapter
{
    public function request(string $url): Promise;
}
