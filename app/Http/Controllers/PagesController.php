<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title =' Welome to laravel, Enjoy';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title =' This is about us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title'=> 'Services',
            'services'=> ['web', 'programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
