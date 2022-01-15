<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jorenvh\Share;

class SocialShareButtonsController extends Controller
{

    public function ShareWidget()
    {
        $shareComponent = \Share::page('http://jorenvanhocht.be', 'abduhalimsdjalkdjsaklj')

	    ->telegram()
	    ->facebook();

        // dd($shareComponent);
        return view('pages.showPost', compact('shareComponent'));

    }


     // public function ShareWidget($slug)
    // {
    //     $shareComponent = \Share::page('http://localhost:8000/posts/'.$slug)
	//     ->facebook()
    //     ->twitter()
	//     ->getRawLinks();

    //     return redirect($shareComponent);
    // }
}
