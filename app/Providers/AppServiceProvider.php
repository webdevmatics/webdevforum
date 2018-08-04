<?php

namespace App\Providers;

use App\Tag;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
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
         Schema::defaultStringLength(191);
       
        if (Schema::hasTable('tags')) 
        {
            $minutes=100;
            $tags = Cache::remember('tags', $minutes, function () {
                    return Tag::all();    
                });
            View::share('tags',$tags);
        }
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
