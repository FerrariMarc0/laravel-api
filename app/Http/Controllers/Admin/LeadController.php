<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function destroy(Lead $lead){

        $lead->delete();

        return to_route('admin.portfolios.index');
    }
}
