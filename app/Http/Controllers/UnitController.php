<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{

    public function index()
    {
        $units = Unit::latest()->get();
        return view('list-units', compact('units'));
    }


    public function create()
    {
        return view('input-units');
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




    public function edit(Unit $unit)
    {
        return view('update-units', compact('unit'));
    }


    public function update(Request $request, Unit $unit)
    {
        $request->validate([
            'unit_id' => 'required|unique:units,unit_id,' . $unit->id,
            'name' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'harga' => 'required|numeric',
            'jumlah_kamar' => 'required|integer',
            'luas_bangunan' => 'required|integer',
            'luas_lahan' => 'required|integer',
        ]);

        $unit->update($request->all());

        return redirect()->route('units.index')
            ->with('success', 'Properti berhasil diperbarui.');
    }


    public function destroy(Unit $unit)
    {
        $unit->delete();

        return redirect()->route('units.index')
            ->with('success', 'Properti berhasil dihapus.');
    }
}
