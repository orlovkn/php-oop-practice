<?php

namespace App;

class Credentials
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function add(): bool
    {
        // ...
    }

    public function remove(): bool
    {
        // ...
    }

    public function verify(): bool
    {
        return true;
    }
}
