<?php

namespace App\Providers;

// use App\Models\Painting;
// use App\Models\Cart;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\View;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $userid = Session::get('userid');
        // View::share('layout_carts', DB::table('painting')->where('account_cart.account_id',$userid)->join('account_cart', 'account_cart.painting_id', '=', 'painting.id')->select('account_cart.*', 'painting.name as paintingName', 'painting.price as paintingPrice')->get());

        view()->composer('*', function ($view) {
            $userid = Session::get('userid'); 
            $layout_carts = DB::table('painting')->where('account_cart.account_id',$userid)->join('account_cart', 'account_cart.painting_id', '=', 'painting.id')->join('photos', 'photos.painting_id', '=', 'painting.id')->select('account_cart.*', 'painting.name as paintingName', 'painting.price as paintingPrice', 'painting.id as paintingId', 'photos.name as photoName')->get();
            $view->with('layout_carts',$layout_carts);
        });

    }
}
