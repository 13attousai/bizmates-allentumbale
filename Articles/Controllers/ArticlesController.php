<?php

namespace Articles\Controllers;

use Home\DataResult;

class ArticlesController extends \App\Http\Controllers\Controller
{
    public function list()
    {
        $result = new DataResult;
        $result->data = \Articles\Models\Articles::orderBy('created_at', 'DESC')->limit(10)->get();
        return response()->json($result, 200);
    }
}
