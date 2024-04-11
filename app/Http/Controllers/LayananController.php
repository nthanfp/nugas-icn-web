<?php

namespace App\Http\Controllers;

use App\Models\JokiCategory;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function getCustomLayanan($slug)
    {
        $categories = JokiCategory::select('name', 'slug')->get();
        $jokiCategory = JokiCategory::where('slug', $slug)->with('prices', 'portfolios')->firstOrFail();
        
        // Pass the data to the view
        return view('layanan.custom', compact('categories', 'jokiCategory'));
    }
}