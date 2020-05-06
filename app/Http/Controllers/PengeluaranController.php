<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengeluaran;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datakeluar = Pengeluaran::all();

        return view('pengeluaran.index', compact('datakeluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengeluaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'hari' => 'required',
            'tanggal' => 'required',
            'nominal' => 'required|numeric',
            'kategori2' => 'required',
            'keterangan' => 'required|max:255',
        ]);
        $show = Pengeluaran::create($validatedData);
   
        return redirect('/pengeluaran')->with('success', 'Data Pengeluaran Baru sukses disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datakeluar = Pengeluaran::findOrFail($id);

        return view('pengeluaran.edit', compact('datakeluar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'hari' => 'required',
            'tanggal' => 'required',
            'nominal' => 'required|numeric',
            'kategori2' => 'required',
            'keterangan' => 'required|max:255',
        ]);
        Pengeluaran::whereId($id)->update($validatedData);

        return redirect('/pengeluaran')->with('success', 'Data Pengeluaran sukses diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datakeluar = Pengeluaran::findOrFail($id);
        $datakeluar->delete();

        return redirect('/pengeluaran')->with('success', 'Data Pengeluaran tersebut sukses dihapus');
    }
}
