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
        /* $projects = Portfolio::with('technologies', 'type')->get(); */
        $projects = Portfolio::with('technologies', 'type')->paginate(6);

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }

    public function show(/* string $slug */ int $id )
    {
        /* $project = Portfolio::where('slug', $slug)->with('technologies', 'type')->first(); */
        /* $project = Portfolio::where('id', $id)->with('technologies', 'type')->first(); */
        $project = Portfolio::find($id)->with('technologies', 'type')->first();

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
