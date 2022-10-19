<?php

namespace Lackoxygen\TiktokShop;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * @var string
     */
    public static string $name = 'tiktok.shop';

    /**
     * @var array|string[]
     */
    protected array $commands = [];

    /**
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $configPath = __DIR__ . '/../publish/tiktok.shop.php';
            $this->publishes([
                $configPath => config_path('tiktok.shop.php')
            ], 'lackoxygen-tiktok-shop');
            $this->commands($this->commands);
        }
    }

    /**
     * @return void
     */
    public function register()
    {
        $this->app->singleton(static::$name, function (\Illuminate\Foundation\Application $application, array $args) {
            return new Application(...$args);
        });
    }

    /**
     * @return string[]
     */
    public function provides(): array
    {
        return [static::$name];
    }
}
