<?php

namespace Destinations\Controllers;

use Illuminate\Http\Request;

class DestinationsController extends \App\Http\Controllers\Controller
{
    public function list()
    {
        $destinations = \Regions\Models\Regions::with('destinations')->get();
        return response()->json($destinations, 200);
    }
}
