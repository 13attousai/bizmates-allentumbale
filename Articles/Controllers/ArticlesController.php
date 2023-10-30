<?php

namespace Articles\Controllers;

class ArticlesController extends \App\Http\Controllers\Controller
{
    public function list()
    {
        $articles = \Articles\Models\Articles::orderBy('created_at', 'DESC')->limit(10)->get();
        return response()->json($articles, 200);
    }
}
