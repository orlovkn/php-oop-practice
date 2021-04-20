<?php

namespace App\Format;

class XML implements FormatInterface
{
    private array $data;

    public function convert(): string
    {
        $result = '';

        foreach ($this->data as $key => $value) {
            $result .= '<'.$key.'>'.$value.'</'.$key.'>';
        }

        return htmlspecialchars($result);
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }
}