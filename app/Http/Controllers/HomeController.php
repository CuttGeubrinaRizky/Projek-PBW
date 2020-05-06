<?php

namespace App\Http\Controllers;

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
        $laporan_pemasukan = \DB::table('pemasukans') -> sum ('nominal');

        $laporan_pengeluaran = \DB::table('pengeluarans') -> sum ('nominal');

        $total_akhir = $laporan_pemasukan - $laporan_pengeluaran;

        return view('home', compact('laporan_pemasukan', 'laporan_pengeluaran', 'total_akhir'));
    }
    public function hasil()
    {

        $laporan_pemasukan = \DB::table('pemasukans') -> sum ('nominal');

        $laporan_pengeluaran = \DB::table('pengeluarans') -> sum ('nominal');

        $total_akhir = $laporan_pemasukan - $laporan_pengeluaran;

        return view('home', compact('laporan_pemasukan', 'laporan_pengeluaran', 'total_akhir'));
    }
}