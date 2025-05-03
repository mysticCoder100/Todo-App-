<?php

namespace App\Providers;

use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\Contract\CategoryRepositoryContract;
use App\Repositories\User\Contract\UserRepositoryContract;
use App\Repositories\User\UserRepository;
use App\Services\Auth\AuthService;
use App\Services\Auth\Contract\AuthServiceContract;
use App\Services\Category\CategoryService;
use App\Services\Category\Contract\CategoryServiceContract;
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
        $this->app->bind(AuthServiceContract::class, AuthService::class);
        $this->app->bind(UserRepositoryContract::class, UserRepository::class);
        $this->app->bind(CategoryRepositoryContract::class, CategoryRepository::class);
        $this->app->bind(CategoryServiceContract::class, CategoryService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
