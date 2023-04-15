<?php

namespace App\Solid\Providers;

use App\Solid\Interfaces\UserRepositoryInterface;
use App\Solid\Interfaces\UserServiceInterface;
use App\Solid\Registry\UserServiceRegistry;
use App\Solid\Repositories\UserRepository;
use App\Solid\Services\UserAdminService;
use App\Solid\Services\UserCommonService;
use App\Solid\Services\UserService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserServiceRegistry::class);

        $this->app->singleton(
            UserServiceInterface::class,
            UserService::class
        );
        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function boot()
    {
        $this->app->make(UserServiceRegistry::class)
            ->register('common', App::make(UserCommonService::class));
        $this->app->make(UserServiceRegistry::class)
            ->register('admin', App::make(UserAdminService::class));
    }
}
