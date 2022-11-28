<?php

namespace Modules\Login\Providers;

use Illuminate\Support\ServiceProvider;


class LoginServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(base_path('Theme/views/login'), 'login');
        $this->loadMigrationsFrom(base_path("modules/login/database/migrations"));
    }
    
}
