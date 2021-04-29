<?php

namespace App;

class User
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function debug()
    {
        print_r($this->getName());
    }
}
