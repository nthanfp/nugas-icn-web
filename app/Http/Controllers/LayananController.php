<?php

namespace App\Http\Controllers;

use App\Models\JokiCategory;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display the custom layanan based on the given slug.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getCustomLayanan(string $slug)
    {
        // Retrieve all categories with only 'name' and 'slug' fields
        $categories = JokiCategory::select('name', 'slug')->get();

        // Retrieve the specific JokiCategory with related prices and portfolios
        $jokiCategory = JokiCategory::where('slug', $slug)
            ->with(['prices', 'portfolios'])
            ->firstOrFail();

        // Pass the data to the view
        return view('layanan.custom', compact('categories', 'jokiCategory'));
    }
}
