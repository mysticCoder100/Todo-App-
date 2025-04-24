<?php

namespace App\Services\Auth\Contract;

use App\Dto\LoginDto;
use App\Dto\RegisterDto;

interface AuthServiceContract
{
    public function login(LoginDto $loginDto);

    public function register(RegisterDto $registerDto);
}
