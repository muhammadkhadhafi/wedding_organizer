<?php

namespace App\Http\Controllers;

use App\Models\DaftarKlien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarKlienController extends Controller
{
    public function index()
    {
        return view('organizer.daftarklien.index', [
            'daftarklien' => DaftarKlien::latest()->get()
        ]);
    }

    public function create()
    {
        return view('organizer.daftarklien.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => ['required', 'min:3', 'max: 50'],
            'tanggal_kegiatan' => ['required'],
            'foto_klien' => ['required', 'file', 'image', 'max:5000'],
            'foto_kegiatan' => ['required', 'file', 'image', 'max:5000'],
            'deskripsi' => ['min: 1', 'max: 1000']
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('foto_klien') && $request->file('foto_kegiatan')) {
            $validatedData['foto_klien'] = $request->file('foto_klien')->store('daftarklien/fotoklien');
            $validatedData['foto_kegiatan'] = $request->file('foto_kegiatan')->store('daftarklien/fotokegiatan');
        }

        DaftarKlien::create($validatedData);

        return redirect('/daftarklien')->with('sukses', 'Daftar klien berhasil ditambahkan');
    }

    public function show(DaftarKlien $daftarklien)
    {
        return view('organizer.daftarklien.show', [
            'klien' => $daftarklien
        ]);
    }

    public function edit(DaftarKlien $daftarklien)
    {
        return view('organizer.daftarklien.edit', [
            'klien' => $daftarklien
        ]);
    }

    public function update(Request $request, DaftarKlien $daftarklien)
    {
        $rules = [
            'nama' => ['required', 'min:3', 'max: 50'],
            'tanggal_kegiatan' => ['required'],
            // 'foto_klien' => ['image', 'file',  'max:5000'],
            // 'foto_kegiatan' => ['image', 'file',  'max:5000'],
            'deskripsi' => ['min: 1', 'max: 1000']
        ];

        if ($request->file('foto_klien')) {
            $rules['foto_klien'] = ['image', 'file', 'max:5000'];
        }

        if ($request->file('foto_kegiatan')) {
            $rules['foto_kegiatan'] = ['image', 'file', 'max:5000'];
        }

        $validatedData = $request->validate($rules);

        if ($request->file('foto_klien')) {
            if ($daftarklien->foto_klien) {
                Storage::delete($daftarklien->foto_klien);
            }
            $validatedData['foto_klien'] = $request->file('foto_klien')->store('daftarklien/fotoklien');
        }

        if ($request->file('foto_kegiatan')) {
            if ($daftarklien->foto_kegiatan) {
                Storage::delete($daftarklien->foto_kegiatan);
            }
            $validatedData['foto_kegiatan'] = $request->file('foto_kegiatan')->store('daftarklien/fotokegiatan');
        }

        DaftarKlien::where('id', $daftarklien->id)->update($validatedData);

        return redirect('/daftarklien')->with('sukses', 'Daftar klien berhasil diperbarui');
    }
}
