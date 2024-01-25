<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function create(Request $request)
    {
        $token = $request->get('token');

        if($token != 'sadufhuashfuhasufhasfh') {
            return response()->json([
                'success' => false,
                'message' => 'Invalid token',
            ]);
        }

        $leadData = $request->only('name', 'email', 'phone', 'message');

        $lead = Lead::create($leadData);

        return response()->json([
            'success' => true,
            'data' => $lead,
        ]);
    }
}
