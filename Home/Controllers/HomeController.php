<?php

namespace Home\Controllers;

use Illuminate\Http\Request;

class HomeController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return view('home');
    }

    public function destinations()
    {
        return view('destinations');
    }

    public function loadPage($page)
    {
        return view('content')->with('page', str_replace('_', ' ', $page));
    }
}
