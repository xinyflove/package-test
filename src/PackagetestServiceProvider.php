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
        //$this->publishes([__DIR__.'/../config/msgsender.php' => config_path('msgsender.php')]);

        // 加载路由文件
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        // 加载数据库迁移文件
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        // 加载视图
        $this->loadViewsFrom(__DIR__.'/views', 'packagetest');
        $this->publishes([
            __DIR__.'/../config/packagetest.php' => config_path('packagetest.php'),
        ]);
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/peakxin/packagetest'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /*$this->app->singleton('test-admin', function () {
            return new TestAdmin;
        });*/
        $this->app->make('PeakXin\PackageTest\TestController');

        // 合并配置
        $this->mergeConfigFrom(
            __DIR__.'/../config/packagetest.php', 'packagetest'
        );
    }
}
