<?php

namespace PeakXin\PackageTest;

use Illuminate\Support\ServiceProvider;

class PackagetestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('test-admin', function () {
            return new TestAdmin;
        });
    }
}
