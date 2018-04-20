<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Schema::defaultStringLength(191);
        $category = Category::all();
        view()->composer(['header'], function ($view) use ($category) {
            $view->with('category',$category);
        });

       if($_COOKIE['user_id']){

           $user_info = User::find($_COOKIE['user_id']);
       }else{
           $user_info = null;
       }
           view()->composer(['right_top','header'], function ($view) use ($user_info) {
               $view->with('user_info',$user_info);
           });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
