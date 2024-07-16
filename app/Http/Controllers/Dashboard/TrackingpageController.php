<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TrackingpageController extends Controller
{
    public function index()
    {
        return view('dashboard.trackingpage');
    }

    public function search(Request $request)
    {
        $val = $request->data;
        $data = DB::table('documents')->where('token', $val)->first();


        return response()->json([
            'data' => $data
        ]);
    }
}
