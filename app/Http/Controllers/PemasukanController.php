<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemasukan;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datamasuk = Pemasukan::all();

        return view('pemasukan.index', compact('datamasuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemasukan.create');
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
            'kategori' => 'required',
            'keterangan' => 'required|max:255',
        ]);
        $show = Pemasukan::create($validatedData);
   
        return redirect('/pemasukan')->with('success', 'Data Pemasukan Baru sukses disimpan');
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
        $datamasuk = Pemasukan::findOrFail($id);

        return view('pemasukan.edit', compact('datamasuk'));
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
            'kategori' => 'required',
            'keterangan' => 'required|max:255',
        ]);
        Pemasukan::whereId($id)->update($validatedData);

        return redirect('/pemasukan')->with('success', 'Data Pemasukan sukses diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datamasuk = Pemasukan::findOrFail($id);
        $datamasuk->delete();

        return redirect('/pemasukan')->with('success', 'Data Pemasukan tersebut sukses dihapus');
    }
}
