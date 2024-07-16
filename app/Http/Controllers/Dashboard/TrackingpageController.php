<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Support\Carbon;

class TrackingpageController extends Controller
{
    public function index()
    {
        $visitorsToday = Visitor::whereDate('created_at', Carbon::today())->count();
        $visitorsLast30Days = Visitor::where('created_at', '>=', Carbon::now()->subDays(30))->count();
        $viewsToday = Visitor::whereDate('created_at', Carbon::today())->sum('views');
        $viewsLast30Days = Visitor::where('created_at', '>=', Carbon::now()->subDays(30))->sum('views');
        $totalViews = Visitor::sum('views');

        $visitors = Visitor::all();
        return view('dashboard.trackingpage',
            compact(
                'visitorsToday',
                'visitorsLast30Days',
                'viewsToday',
                'viewsLast30Days',
                'totalViews',
                'visitors',
            )
        );
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
