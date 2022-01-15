<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\PostRepository;
use App\Models\Post;
use App\Repositories\Interfaces\AdvertRepositoryInterface;
use App\Repositories\AdvertRepository;
use App\Models\Advertising;
use App\Models\Category;
use App\Models\Menu;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(AdvertRepositoryInterface::class, AdvertRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('sections.sidebar', function($view){
            $items=Post::latest()->get();

            $categories=Category::all();

            $adverPhoto=Advertising::latest()->first();
            $view->with(compact('items','adverPhoto', 'categories'));
        });

        view()->composer('layouts.menu', function($view){
            $menus=Menu::all();
           $colors=[
               'red'=>'red',
               'aqua'=>'aqua',
               'green'=>'green',
               'yellow'=>'yellow',
               'grey'=>'grey',
            ];
           $rand_color=array_rand($colors);
            $view->with(compact('menus', 'rand_color'));
        });

        view()->composer('layouts.footer', function($view){
            $recents=Post::latest()->limit(3)->get();

            $PPs=Post::orderByDesc('view')->limit(3)->get(); //popular posts
            $PCs=Category::withCount('posts')->get()->sortByDesc('posts_count')->take(6); //popular categories


            $view->with(compact('recents','PCs', 'PPs'));
        });
    }
}
