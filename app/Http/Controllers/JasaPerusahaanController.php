<?php

namespace App\Http\Controllers;

use App\Models\JasaPerusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JasaPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('organizer.jasaperusahaan.index', [
            'jasaperusahaans' => JasaPerusahaan::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organizer.jasaperusahaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'judul' => ['required', 'max:100', 'min:3'],
            'harga' => ['required'],
            'kapasitas' => ['required'],
            'gambar' => ['required', 'image', 'file', 'max:3066'],
            'lokasi' => ['required'],
            'deskripsi' => ['required', 'max:255', 'min:3']
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('jasaperusahaan/lokasi');
        }

        JasaPerusahaan::create($validatedData);

        return redirect('/jasaperusahaan')->with('sukses', 'Jasa perusahaan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(JasaPerusahaan $jasaperusahaan)
    {
        return view('organizer.jasaperusahaan.show', [
            'jasaperusahaan' => $jasaperusahaan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JasaPerusahaan $jasaperusahaan)
    {
        return view('organizer.jasaperusahaan.edit', [
            'jasaperusahaan' => $jasaperusahaan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JasaPerusahaan $jasaperusahaan)
    {
        $rules = [
            'judul' => ['required', 'max:100', 'min:3'],
            'harga' => ['required'],
            'kapasitas' => ['required'],
            'gambar' => ['image', 'file', 'max:3066'],
            'lokasi' => ['required'],
            'deskripsi' => ['required', 'max:255', 'min:3']
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('gambar')) {
            Storage::delete($jasaperusahaan->gambar);
            $validatedData['gambar'] = $request->file('gambar')->store('jasaperusahaan/lokasi');
        }

        JasaPerusahaan::where('id', $jasaperusahaan->id)->update($validatedData);

        return redirect('/jasaperusahaan')->with('sukses', 'Jasa perusahaan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JasaPerusahaan $jasaperusahaan)
    {
        Storage::delete($jasaperusahaan->gambar);

        JasaPerusahaan::destroy($jasaperusahaan->id);

        return redirect('/jasaperusahaan')->with('sukses', 'Jasa perusahaan berhasil dihapus');
    }
}
