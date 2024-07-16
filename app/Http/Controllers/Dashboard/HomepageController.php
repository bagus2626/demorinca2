<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Penawaran;
use App\Models\Visitor;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        $visitorsToday = Visitor::whereDate('created_at', Carbon::today())->count();
        $visitorsLast30Days = Visitor::where('created_at', '>=', Carbon::now()->subDays(30))->count();
        $viewsToday = Visitor::whereDate('created_at', Carbon::today())->sum('views');
        $viewsLast30Days = Visitor::where('created_at', '>=', Carbon::now()->subDays(30))->sum('views');
        $totalViews = Visitor::sum('views');

        $visitors = Visitor::all();
        return view('dashboard.homepage', compact('visitorsToday', 'visitorsLast30Days', 'viewsToday', 'viewsLast30Days', 'totalViews', 'visitors'));
    }

    public function sendOffer(Request $request)
    {
        $data = [
            'tanggal' => Carbon::now(),
            'nama_pemohon' => $request->nama_pemohon,
            'nama_perusahaan' => $request->nama_perusahaan,
            'nomor_handphone' => $request->nomor_handphone,
            'email' => $request->email,
            'luas_area' => $request->luas_area,
            'lokasi_perusahaan' => $request->lokasi_perusahaan,
            'keterangan' => $request->keterangan,
        ];
        $result = Penawaran::create($data);

        return response()->json([
            'status' => 200, 
            'data' => $result
        ]);
    }
}
