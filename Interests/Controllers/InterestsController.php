<?php

namespace Interests\Controllers;

use Illuminate\Http\Request;
use Home\DataResult;

class InterestsController extends \App\Http\Controllers\Controller
{
    public function list(Request $request)
    {
        $result = new DataResult;
        $type = constant("\Interests\States\InterestState::{$request->get('page')}");

        $result->data = \Interests\Models\Interests::where('type', $type)->get();
        return response()->json($result, 200);
    }
}
