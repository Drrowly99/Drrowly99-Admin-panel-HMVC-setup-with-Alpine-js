<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /** Fixing Factory::resolveFactoryName */
        Factory::guessFactoryNamesUsing(function (string $modelName) {
            $namespace = Str::contains($modelName, "Models\\")
                ? Str::before($modelName, "App\\Models\\")
                : Str::before($modelName, "App\\");

            $modelName = Str::contains($modelName, "Models\\")
                ? Str::after($modelName, "App\\Models\\")
                : Str::after($modelName, "App\\");

            return $namespace . "Database\\Factories\\" . $modelName . "Factory";
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        foreach (glob(base_path('modules/*')) ?: [] as $dir) {
            $this->loadMigrationsFrom("{$dir}/database/migrations");
            $this->loadTranslationsFrom("{$dir}/resources/lang", basename($dir));
            $this->loadViewsFrom("{$dir}/resources/views", basename($dir));
        }
    }
}