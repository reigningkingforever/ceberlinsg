<?php

namespace App\Providers;

use App\Testimony;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // View::composer(
        //     'frontend.layouts.app', 'App\Http\View\Composers\TestimonyComposer'
        // );

        View::composer('frontend.layouts.app', function ($view) {
            $testimonies = Testimony::orderBy('created_at','desc')->take(3)->get();
            $view->with('testimonies', $testimonies);
        });
    }
}
