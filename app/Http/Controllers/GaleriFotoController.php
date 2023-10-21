<?php

namespace App\Http\Controllers;

use App\Models\GaleriFoto;
use Illuminate\Http\Request;

class GaleriFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('organizer.galerifoto.index', [
            'galerifotos' => GaleriFoto::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organizer.galerifoto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'judul' => ['required', 'min:3', 'max:100'],
            'deskripsi' => ['required', 'min:3', 'max:255'],
            'foto_kegiatan' => ['required', 'image', 'file', 'max:3066'],
            'tanggal_kegiatan' => ['required']
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('foto_kegiatan')) {
            $validatedData['foto_kegiatan'] = $request->file('foto_kegiatan')->store('galerifotokegiatan');
        }

        GaleriFoto::create($validatedData);

        return redirect('/galerifoto')->with('sukses', 'Foto kegiatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(GaleriFoto $galerifoto)
    {
        return view('organizer.galerifoto.show', [
            'galerifoto' => $galerifoto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GaleriFoto $galerifoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GaleriFoto $galerifoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GaleriFoto $galerifoto)
    {
        //
    }
}
