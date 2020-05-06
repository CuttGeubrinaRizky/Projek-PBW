<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class LaporanController extends Controller
{
    public function index() {
        return view ('laporan.index');
    }

    public function cari(Request $request){
        $this->validate($request,[
            'dari' => 'required',
            'sampai' => 'required'
        ]);

        $dari = date('Y-m-d', strtotime($request->dari));
        $sampai = date('Y-m-d', strtotime($request->sampai));

        $pemasukan = \DB::table('pemasukans') -> whereBetween('tanggal', [$dari,$sampai]) -> get ();

        $total_pemasukan = \DB::table('pemasukans') -> whereBetween('tanggal', [$dari,$sampai]) -> sum ('nominal');

        $pengeluaran = \DB::table('pengeluarans') -> whereBetween('tanggal', [$dari,$sampai]) -> get ();

        $total_pengeluaran = \DB::table('pengeluarans') -> whereBetween('tanggal', [$dari,$sampai]) -> sum ('nominal');

        return view('laporan.index', compact('pemasukan', 'pengeluaran', 'total_pemasukan', 'total_pengeluaran'));
    }


}