<?php

namespace App\Http\Controllers;

use App\Models\JasaPerusahaan;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(JasaPerusahaan $jasaPerusahaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JasaPerusahaan $jasaPerusahaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JasaPerusahaan $jasaPerusahaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JasaPerusahaan $jasaPerusahaan)
    {
        //
    }
}
