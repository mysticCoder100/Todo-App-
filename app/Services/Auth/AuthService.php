<?php

namespace App\Services\Auth;

use App\Dto\LoginDto;
use App\Dto\RegisterDto;
use App\Repositories\User\Contract\UserRepositoryContract;
use App\Services\Auth\Contract\AuthServiceContract;
use Illuminate\Support\Facades\Auth;

class AuthService implements AuthServiceContract
{
    public function __construct(
        protected UserRepositoryContract $userRepository
    )
    {

    }

    public function login(LoginDto $loginDto): bool
    {
        if (Auth::attempt($loginDto->toArray())) {
            echo "here";
            session()->regenerate();
            return true;
        }
        return false;
    }

    public function register(RegisterDto $registerDto): bool
    {
        return $this->userRepository->createUser($registerDto);
    }

}
