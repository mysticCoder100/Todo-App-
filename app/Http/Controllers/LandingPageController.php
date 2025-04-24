<?php

namespace App\Http\Controllers;

use App\Exceptions\UserCreationFailedException;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\Auth\Contract\AuthServiceContract;
use App\Services\LandingPage\Contracts\LandingPageServiceContract;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LandingPageController extends Controller
{
    public function __construct(
        protected LandingPageServiceContract $landingPageService,
        protected AuthServiceContract $authService
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
    public function performRegister(RegisterRequest $request): RedirectResponse
    {
        try {
            $this->authService->register($request->toDto());
            return redirect()->back()->with('success', 'Account created!');
        } catch(UserCreationFailedException $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function performLogin(LoginRequest $request): RedirectResponse
    {
        if ($this->authService->login($request->toDto())) {
            return redirect()->route('dashboard')->with(['success' => 'Login successful!']);
        }

        return back()->with(['error' => 'Invalid credentials']);

    }
}
