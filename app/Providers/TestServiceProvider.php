<?php

namespace App\Providers;

use App\Services\TestService;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
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
        //使用singleton绑定单例
        $this->app->singleton('test',function(){
            return new TestService();
        });

        //使用bind绑定实例到接口以便依赖注入
        $this->app->bind('App\Contracts\TestContract',function(){
            return new TestService();
        });
    }
}
