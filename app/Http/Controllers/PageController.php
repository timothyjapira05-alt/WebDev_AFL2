<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view('AboutUs', [
            'title' => 'About us'
        ]);
    }

    public function Blog(){
        return view('Blog', [
            'title' => 'Our Blog'
        ]);
    }

    public function touch(){
        return view('GetInTouch', [
            'title' => 'Get In Touch'
        ]);
    }

    public function story(){
        return view('Story',[
            'title' => 'Story',
        ]);
    }

    public function home()
{
    return view('welcome', [
        'title' => 'Naturae',
    ]);
}
}
