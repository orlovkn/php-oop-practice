<?php

namespace App\Format;

class JSON implements FormatInterface
{
    private array $data;

    public function convert(): string
    {
        return json_encode($this->data);
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }
}