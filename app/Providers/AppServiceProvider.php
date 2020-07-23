<?php

namespace App\Providers;

use App\Avatar;
use App\Campus;
use App\Cart;
use App\Category;
use App\Info;
use App\Post;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('*', function ($view) {
            $info = Info::first();
            $links = Session::get('routes');
            $admin = Session::get('admin');
            $post = Post::all();
            $avatar = Avatar::OrderByDesc('id')->where('user_id', Auth::id())->get()->first();
            $campus = Campus::all()->sortByDesc('long_name');
            $countries   = DB::table('country')->get()->all();
            $regions   = DB::table('regions')->get()->all();

            $view->with(compact('links', 'admin', 'info', 'post', 'avatar', 'campus','countries','regions'));
        });
    }
}
