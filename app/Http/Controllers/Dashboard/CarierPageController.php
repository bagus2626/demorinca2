<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Carier;
use App\Models\Visitor;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class CarierPageController extends Controller
{
    public function index()
    {
        $visitorsToday = Visitor::whereDate('created_at', Carbon::today())->count();
        $visitorsLast30Days = Visitor::where('created_at', '>=', Carbon::now()->subDays(30))->count();
        $viewsToday = Visitor::whereDate('created_at', Carbon::today())->sum('views');
        $viewsLast30Days = Visitor::where('created_at', '>=', Carbon::now()->subDays(30))->sum('views');
        $totalViews = Visitor::sum('views');

        $visitors = Visitor::all();

        $cariers = Carier::all();
        return view('dashboard.carierpage', 
            compact(
                'visitorsToday',
                'visitorsLast30Days',
                'viewsToday',
                'viewsLast30Days',
                'totalViews',
                'visitors',
                'cariers'
            )
        );
    }

    public function detail($id)
    {
         $visitorsToday = Visitor::whereDate('created_at', Carbon::today())->count();
        $visitorsLast30Days = Visitor::where('created_at', '>=', Carbon::now()->subDays(30))->count();
        $viewsToday = Visitor::whereDate('created_at', Carbon::today())->sum('views');
        $viewsLast30Days = Visitor::where('created_at', '>=', Carbon::now()->subDays(30))->sum('views');
        $totalViews = Visitor::sum('views');

        $visitors = Visitor::all();
        $data = Carier::findOrFail($id);
        return view('dashboard.carierdetailpage', 
            compact(
                'visitorsToday',
                'visitorsLast30Days',
                'viewsToday',
                'viewsLast30Days',
                'totalViews',
                'visitors',
                'data'
            )    
        );
    }
}
