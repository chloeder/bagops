<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Data;
use App\Models\Status;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all();
        return view('dokumen.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = Data::all();
        $kategori = Kategori::all();
        return view('dokumen.create', ['data' => $data, 'kategori' => $kategori]);
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
            'judul' => 'required|max:255',
            'nomor' => 'required|max:255',
            'file' => 'required|mimes:ppt,pptx,doc,docx,txt,pdf,xls,xlsx,jpeg,jpg,png,psd,gif,raw|max:204800',
            'keterangan' => 'required|max:255',
            'status_type' => 'nullable',
            'kategori_id' => 'nullable',
        ]);

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file->getClientOriginalName();
            $request->file->storeAs('dataFile', $validated['file']);
        } else {
            $validated = 'nodatafound';
        }

        $data = Data::create($validated);

        return redirect()->route('dokumen', ['data' => $data])->with('status', 'Data Baru berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Data::where('slug', $slug)->first();
        $status = Status::all();
        return view('dokumen.view', ['data' => $data, 'status' => $status], compact('data'));
    }

    public function updateStatus(Request $request, $slug)
    {
        $data = Data::where('slug', $slug)->first();
        if ($data) {
            $data->update(
                [
                    'status_type' => $request->status_type,
                ],

            );
            return redirect('dokumen/detail/' . $slug)->with('status', 'Status Updated');
        } else {
            return redirect('dokumen/detail/' . $slug)->with('status', 'Data Not Found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data = Data::where('slug', $slug)->first();
        $kategori = Kategori::all();
        return view('dokumen.edit', compact('data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data, $slug)
    {
        $rules = [
            'judul' => 'required|max:255',
            'nomor' => 'required|max:255',
            'file' => 'required|mimes:ppt,pptx,doc,docx,txt,pdf,xls,xlsx,jpeg,jpg,png,psd,gif,raw|max:204800',
            'keterangan' => 'max:255',
            'status_type' => 'nullable',
            'kategori_id' => 'nullable',
        ];
        $validated = $request->validate($rules);

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file->getClientOriginalName();
            $request->file->storeAs('dataFile', $validated['file']);
        }

        Data::where('slug', $slug, 'file', $data->file)
            ->update($validated);
        return redirect('dokumen',)->with('status', 'Data berhasi Diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $data = Data::where('slug', $slug)->first();
        $data->delete();
        return redirect('dokumen')->with('status', 'Data berhasi Dihapus!');
    }

    public function download($slug)
    {
        $data = Data::where('slug', $slug)->firstOrFail();
        $pathToFile = storage_path('app/dataFile/' . $data->file);
        return response()->download($pathToFile);
    }
}
