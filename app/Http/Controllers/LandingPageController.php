<?php

namespace App\Http\Controllers;

use App\Services\LandingPage\Contracts\LandingPageServiceContract;
use Illuminate\View\View;

class LandingPageController extends Controller
{
    public function __construct(
        public LandingPageServiceContract $landingPageService
    ) {

    }

    public function index(): View
    {
        return view('welcome', $this->landingPageService->home());
    }

    public function showLogin(): View
    {
        return view('login', $this->landingPageService->login());
    }

    public function showRegister(): View
    {
        return view('register', $this->landingPageService->register());
    }
}
