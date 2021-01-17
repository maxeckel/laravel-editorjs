<?php

namespace Maxeckel\LaravelEditorjs;

use Illuminate\Support\ServiceProvider;
use Maxeckel\LaravelEditorjs\ComponentResolvers\BladeComponentResolver;
use Maxeckel\LaravelEditorjs\Contracts\ComponentResolver;

class LaravelEditorjsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-editorjs.php'),
            ], 'laravel-editorjs:config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-editorjs');

        $this->app->singleton('laravel-editorjs', function () {
            return new LaravelEditorjs;
        });

        $this->app->bind(ComponentResolver::class, BladeComponentResolver::class);
    }
}
