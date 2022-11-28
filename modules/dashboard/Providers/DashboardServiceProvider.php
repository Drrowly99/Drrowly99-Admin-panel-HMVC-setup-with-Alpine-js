<?php

namespace Modules\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(base_path('Theme/views/dashboard_C'), 'dashboard');
        $this->loadMigrationsFrom(base_path("modules/dashboard/database/migrations"));
    }
}
