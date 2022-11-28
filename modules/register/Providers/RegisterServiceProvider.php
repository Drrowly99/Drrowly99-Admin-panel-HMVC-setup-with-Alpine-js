<?php

namespace Modules\Register\Providers;

use Illuminate\Support\ServiceProvider;

class RegisterServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(base_path('Theme/views/register'), 'register');
        $this->loadMigrationsFrom(base_path("modules/register/database/migrations"));
    }
}
