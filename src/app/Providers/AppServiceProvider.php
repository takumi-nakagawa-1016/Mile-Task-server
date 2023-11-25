<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TargetRepository;
use TargetRepositoryInterface;
use TargetService;
use TargetServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        /**************** Repository ****************/
        $this->app->bind(TargetRepositoryInterface::class, TargetRepository::class);

        /**************** Service ****************/
        $this->app->bind(TargetServiceInterface::class, TargetService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
