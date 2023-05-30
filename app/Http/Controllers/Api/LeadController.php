<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request){

        $data = $request->validate([
            'user' => 'string|max:50',
            'email' => 'string|max:50|email',
            'message' => 'string'
        ]);

        return $request->all();
    }
}
