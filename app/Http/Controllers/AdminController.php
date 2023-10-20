<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('organizer.admin.index', [
            'admins' => Admin::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organizer.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama' => ['required', 'max:255'],
            'username' => ['required', 'unique:admins', 'min:3', 'max:255'],
            'password' => 'required|min:5|max:255',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Admin::create($validatedData);

        return redirect('/admin')->with('sukses', 'Admin berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        Admin::destroy($admin->id);

        return redirect('/admin')->with('sukses', 'Admin berhasil dihapus');
    }
}
