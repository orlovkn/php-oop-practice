<?php

namespace App;

class UserAuth
{
    private User $user;
    private Credentials $credentials;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->credentials = new Credentials($user);
    }

    public function auth()
    {
        if ($this->credentials->verify()) {
            printf('authetification %s', $this->user->getName());
        }
    }
}
