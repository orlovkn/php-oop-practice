<?php

namespace App;

use App\Format\FormatInterface;

class Serializer
{
    private FormatInterface $format;

    public function __construct(FormatInterface $format) {
        $this->format = $format;
    }

    public function serialize(array $data): string
    {
        $this->format->setData($data);
        return $this->format->convert();
    }
}