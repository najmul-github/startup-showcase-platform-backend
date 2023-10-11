<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BackendSerivceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            'App\Repositories\Pitch\PitchRepository',
            'App\Repositories\Pitch\PitchRepositoryImpl',
        );
        $this->app->bind(
            'App\Repositories\User\UserRepository',
            'App\Repositories\User\UserRepositoryImpl',
        );

        $this->app->bind(
            'App\Services\Pitch\PitchService',
            'App\Services\Pitch\PitchServiceImpl',
        );        
        $this->app->bind(
            'App\Services\User\UserService',
            'App\Services\User\UserServiceImpl',
        );
    }
}
