<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\User;
use App\Models\Status;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Data::all();
        $kategori = Kategori::all();
        $dashboard = 'dashboard';
        $datacount = Data::count();
        $kategoricount = Kategori::count();
        $usercount = User::count();
        $totalDiterima = Data::where(['status_type' => 2])->count();
        $totalTerlambat = Data::where(['status_type' => 3])->count();

        $diterima = [$datacount];

        return view('dashboard', ['diterima' => $diterima, 'data_count' => $datacount, 'kategori_count' => $kategoricount, 'user_count' => $usercount, 'total_terlambat' => $totalTerlambat, 'total_diterima' => $totalDiterima], compact('dashboard'));
    }
}
