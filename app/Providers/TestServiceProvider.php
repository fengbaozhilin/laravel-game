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

        //使用bind绑定实例到接口以便依赖注入
        $this->app->bind('App\Contracts\Hzj',function(){
            return new TestService();
        });

//        //使用bind绑定单例
//        $this->app->singleton('App\Contracts\Hzj',function(){
//
//            return new TestService();
//        });
    }
}
