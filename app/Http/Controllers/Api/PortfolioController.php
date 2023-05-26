<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        /* $projects = Portfolio::all(); */
        $projects = Portfolio::with('technologies', 'type')->get();
        /* $projects = Portfolio::with('technologies', 'type')->paginate(3); */

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }

    public function show(string $slug)
    {
        $project = Portfolio::where('slug', $slug)->with('technologies', 'type')->first();

        if ($project) {

            return response()->json([
                'success' => true,
                'results' => $project
            ]);

        } else {

            return response()->json([
                'success' => false,
                'results' => null
            ], 404);
        }
    }
}
