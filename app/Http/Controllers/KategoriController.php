<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Status;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('category.index', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('category.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|unique:kategori|max:255',
        ]);


        $kategori = Kategori::create($request->all());
        return redirect()->route('kategori', compact('kategori'))->with('status', 'Kategori Baru berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $kategori = Kategori::where('slug', $slug)->first();
        return view('category.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'nama' => 'required|unique:kategori|max:255',
        ]);

        $kategori = Kategori::where('slug', $slug)->first();
        $kategori->update($request->all());
        return redirect('kategori')->with('status', 'Kategori berhasi Diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $kategori = Kategori::where('slug', $slug)->first();
        $kategori->delete();
        return redirect('kategori')->with('status', 'Kategori berhasi Dihapus!');
    }
}
