<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function index()
    {
        $maps = Map::all();
        return view('maps.index', compact('maps'));
    }

    public function show(Map $map)
    {
        $maps = Map::all();
        return view('maps.lokasi', compact('maps'));
    }
    public function about(Map $map)
    {
        $maps = Map::all();
        return view('maps.about', compact('maps'));
    }
}