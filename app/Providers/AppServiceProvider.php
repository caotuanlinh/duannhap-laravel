<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator; 
/*
nếu lỗi thì xoá thằng thứ 3 đi rôi kích hoạt lại thằng đb 1 này
*/
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }
}
