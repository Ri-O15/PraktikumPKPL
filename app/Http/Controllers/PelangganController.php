<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'Nama' => 'required',
            'Email' => 'required',
        ],[
            'Nama.required' => 'Name wajib diisi',
            'Email.required' => 'Email wajib diisi',
        ]);
    
        // If validation passes, create the new Pelanggan record
        Pelanggan::create([
            'Nama' => $request->Nama,
            'Email' => $request->Email,
            'Message' => $request->Message,
        ]);
    
        // Redirect with success message if the data is stored successfully
        return redirect('malang')->with('success', 'Data Tersimpan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
