<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use DB;
use App\Models\Update;
use App\Models\Bmupdate;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Paginator::useBootstrapThree();
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);
        View::composer('welcome', function ($view) {
            $airport_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('airport_usd');
            $island_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('island_usd');
            $victoria_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('victoria_usd');
            $kano_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('kano_usd');
            $abuja_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('abuja_usd');

            return $view->with('airport_usd', $airport_usd)->with('island_usd', $island_usd)->with('victoria_usd', $victoria_usd)->with('kano_usd', $kano_usd)->with('abuja_usd', $abuja_usd);
        
        });

        View::composer('panels/welcome-panel', function ($view) {
            $airport_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('airport_usd');
            $island_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('island_usd');
            $victoria_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('victoria_usd');
            $kano_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('kano_usd');
            $abuja_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('abuja_usd');

            return $view->with('airport_usd', $airport_usd)->with('island_usd', $island_usd)->with('victoria_usd', $victoria_usd)->with('kano_usd', $kano_usd)->with('abuja_usd', $abuja_usd);
        
        });

        View::composer('partials.api', function ($view) {
            $airport_usd = Update::orderBy('id', 'DESC')->latest()->value('airport_usd');
            $island_usd = Update::orderBy('id', 'DESC')->latest()->value('island_usd');
            $victoria_usd = Update::orderBy('id', 'DESC')->latest()->value('victoria_usd');
            $kano_usd = Update::orderBy('id', 'DESC')->latest()->value('kano_usd');
            $abuja_usd = Update::orderBy('id', 'DESC')->latest()->value('abuja_usd');

            return $view->with('airport_usd', $airport_usd)->with('island_usd', $island_usd)->with('victoria_usd', $victoria_usd)->with('kano_usd', $kano_usd)->with('abuja_usd', $abuja_usd);
        
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
