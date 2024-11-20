<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    
    public function index()
    {
        $units = Unit::latest();
        return view('list-units', compact('units')); 
    }
    
   
    public function create()
    {
        return view('units.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'unit_id' => 'required|unique:units',
            'name' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'harga' => 'required|numeric',
            'jumlah_kamar' => 'required|integer',
            'luas_bangunan' => 'required|integer',
            'luas_lahan' => 'required|integer',
        ]);

        Unit::create($request->all());

        return redirect()->route('units.index')
                         ->with('success', 'Properti berhasil ditambahkan.');
    }

  
    public function show(Unit $property)
    {
        return view('units.show', compact('property'));
    }


    public function edit(Unit $property)
    {
        return view('units.edit', compact('property'));
    }

   
    public function update(Request $request, Unit $property)
    {
        $request->validate([
            'unit_id' => 'required|unique:units,unit_id,' . $property->id,
            'name' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'harga' => 'required|numeric',
            'jumlah_kamar' => 'required|integer',
            'luas_bangunan' => 'required|integer',
            'luas_lahan' => 'required|integer',
        ]);

        $property->update($request->all());

        return redirect()->route('units.index')
                         ->with('success', 'Properti berhasil diperbarui.');
    }

   
    public function destroy(Unit $property)
    {
        $property->delete();

        return redirect()->route('units.index')
                         ->with('success', 'Properti berhasil dihapus.');
    }
}
