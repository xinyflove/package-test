<?php

namespace PeakXin\PackageTest;

use Illuminate\Support\ServiceProvider;

class PackagetestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     * 在注册后进行服务的启动。
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/../config/msgsender.php' => config_path('msgsender.php')]);
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
