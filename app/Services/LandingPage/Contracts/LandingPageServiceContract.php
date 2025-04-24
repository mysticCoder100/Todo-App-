<?php

namespace App\Services\LandingPage\Contracts;

interface LandingPageServiceContract
{
    public function home(): array;
    public function login(): array;
    public function register(): array;
}
