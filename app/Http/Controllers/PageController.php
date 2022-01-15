<?php

namespace App\Http\Controllers;

use App\Models\Advertising;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Menu;

class PageController extends Controller
{
    public function home(){
        $posts=Post::latest('created_at')->limit(5)->get();
        $category=Category::whereSlug('lifestyle')->first();
        $categories=Category::with('posts')->get();

        $adverPhoto=Advertising::latest()->first();
        return view('home', compact('posts', 'categories','adverPhoto'));
    }

    public function posts($slug){
        $post=Post::where('slug', $slug)->first();
        $next_post=Post::where('id', '>', $post->id)->orderBy('id','asc')->first();
        $pre_post=Post::where('id', '<', $post->id)->orderBy('id','desc')->first();
        $advert=Advertising::latest()->first();

        $post->increment('view');
        $post->save();

        $relateds = Post::whereHas('categories', function ($q) use ($post) {
            return $q->whereIn('name', $post->categories->pluck('name'));
        })
        ->where('id', '!=', $post->id) // So you won't fetch same post
        ->limit(2)->get();

       return view('pages.showPost', compact('post', 'pre_post', 'next_post','advert','relateds'));
    }

    public function search(Request $request){

        $key=$request->key;
        $posts = Post::query()
        ->where('title', 'LIKE', "%".$key."%")
        ->orWhere('body', 'LIKE', "%".$key."%")
        ->get();

        return view('pages.searchPage', compact('posts', 'key'));
    }

    public function category($slug){


        switch($slug){
            case 'fashion':
                $page="fashion";
                break;
            case 'food':
                $page="food";
                break;
            case 'lifestyle':
                $page="lifestyle";
                break;
            case 'travel':
                $page="travel";
                break;
            case 'health':
                $page="health";
                break;
            case 'vlogs':
                $page="vlogs";
                break;
            default:
                $page="default";
                break;

        }

        $advert=Advertising::latest()->first();
        // $advert=Advertising::latest()->get();
        $category=Category::whereSlug($slug)->first();
        $posts=$category->posts;

        return view('categories.'.$page, compact('advert', 'posts', 'category'));
    }
    public function vlogs(){
        return view('categories.vlogs');
    }

}
