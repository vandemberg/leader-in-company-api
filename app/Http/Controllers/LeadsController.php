<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadsController extends Controller
{
    public function store(Request $request)
    {
        $leadData = $request->only('name', 'email', 'phone', 'message');

        $lead = Lead::create($leadData);

        return response()->json([
            'success' => true,
            'data' => $lead,
        ]);
    }
}
