<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FishController extends Controller
{
    public function index(Request $request)
    {
        // $items = Fishermen::all();
        $items = DB::table('fishermen');
        return view('fish.index', ['items' => $items]);
    }
}
