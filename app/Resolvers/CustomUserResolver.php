<?php

namespace App\Resolvers;

use Illuminate\Contracts\Auth\Factory as AuthFactory;

class CustomUserResolver implements \OwenIt\Auditing\Contracts\UserResolver
{
    protected $auth;

    public function __construct(AuthFactory $auth)
    {
        $this->auth = $auth;
    }

    public function getUser()
    {
        return $this->auth->user();
    }
}
