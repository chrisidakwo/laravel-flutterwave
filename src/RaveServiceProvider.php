<?php

namespace ChrisIdakwo\Flutterwave\Laravel;

use ChrisIdakwo\Flutterwave\Rave;
use Illuminate\Support\ServiceProvider;

class RaveServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-flutterwave.php' => config_path('laravel-flutterwave.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-flutterwave.php', 'laravel-flutterwave');

        $config = config('laravel-flutterwave');

        $this->app->bind('laravel-flutterwave', static function () use ($config) {
            return new Rave($config['secret_key'], $config['base_url']);
        });
    }
}
