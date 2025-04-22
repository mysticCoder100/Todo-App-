<?php

namespace App\Providers;

use App\Services\LandingPage\Contracts\LandingPageServiceContract;
use App\Services\LandingPage\LandingPageService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(LandingPageServiceContract::class, LandingPageService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
