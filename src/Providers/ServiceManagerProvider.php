<?php

namespace Carsguide\ServiceManager\Providers;

use Carsguide\ServiceManager\ServiceManager;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class ServiceManagerProvider extends ServiceProvider
{
    /**
     * Register auth service
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('servicemanager', function () {
            return new AuthManager(new Client());
        });
    }
}
