<?php

namespace Gotrex\Whmcs;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;
use Gotrex\Whmcs\Adapter\GuzzleHttpAdapter;

class WhmcsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/whmcs.php' => config_path('whmcs.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/whmcs.php', 'whmcs');

        $this->registerClient();
        
        $this->registerWhmcs();
    }

    /**
     * Register Guzzle Client
     */
    public function registerClient()
    {
        $this->app->singleton('whmcs.client', function () {
            return new GuzzleHttpAdapter();
        });

        $this->app->alias('whmcs.client', GuzzleHttpAdapter::class);
    }

    /**
     * Register WHMCS
     */
    public function registerWhmcs()
    {
        $this->app->singleton('whmcs', function (Container $app) {
            $config = $app['config'];
            $client = $app['whmcs.client'];
            return new WhmcsClass($config, $client);
        });

        $this->app->alias('whmcs', WhmcsFacade::class);
    }
}
