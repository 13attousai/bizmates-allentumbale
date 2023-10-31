<?php

namespace Destinations\Controllers;

use Home\DataResult;

class DestinationsController extends \App\Http\Controllers\Controller
{
    public function list()
    {
        $result = new DataResult;
        $result->data = \Regions\Models\Regions::with('destinations')->get();
        return response()->json($result, 200);
    }
}
