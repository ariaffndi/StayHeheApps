<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::latest()->get();
        return view('member.list-members', compact('members'));
    }


    public function create()
    {
        return view('member.input-members');
    }


    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|unique:members',
            'name' => 'required',
            'alamat' => 'required',
            'umur' => 'required|integer',
            'gender' => 'required',
            'no_telp' => 'required',
        ]);

        member::create($request->all());

        return redirect()->route('members.index')
            ->with('success', 'Properti berhasil ditambahkan.');
    }




    public function edit(member $member)
    {
        return view('member.update-members', compact('member'));
    }


    public function update(Request $request, member $member)
    {
        $request->validate([
            'member_id' => 'required|unique:members,member_id,' . $member->id,
            'name' => 'required',
            'alamat' => 'required',
            'umur' => 'required|integer',
            'gender' => 'required',
            'no_telp' => 'required',
        ]);


        $member->update($request->all());

        return redirect()->route('members.index')
            ->with('success', 'Properti berhasil diperbarui.');
    }


    public function destroy(member $member)
    {
        $member->delete();

        return redirect()->route('members.index')
            ->with('success', 'Properti berhasil dihapus.');
    }
}