<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\GameRepositoryInterface;
use App\Repositories\GameRepository;
use App\Services\GameServiceInterface;
use App\Services\GameService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(GameRepositoryInterface::class, GameRepository::class);
        $this->app->bind(GameRepositoryInterface::class, GameService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
