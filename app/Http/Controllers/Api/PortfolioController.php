<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $projects = Portfolio::with('technologies', 'type')->get();

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }
}
