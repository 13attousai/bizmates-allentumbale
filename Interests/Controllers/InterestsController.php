<?php

namespace Interests\Controllers;

use Illuminate\Http\Request;

class InterestsController extends \App\Http\Controllers\Controller
{
    public function list(Request $request)
    {
        $type = $request->get('pathname');
        $type = constant("\Interests\States\InterestState::$type");

        $interests = \Interests\Models\Interests::where('type', $type)->get();
        return response()->json($interests, 200);
    }
}
