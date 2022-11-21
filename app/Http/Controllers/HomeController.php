<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;

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
        $dashboard = 'dashboard';
        $datacount = Data::count();
        $kategoricount = Kategori::count();
        $usercount = User::count();
        return view('dashboard', ['data_count' => $datacount, 'kategori_count' => $kategoricount, 'user_count' => $usercount], compact('dashboard'));
    }
}
