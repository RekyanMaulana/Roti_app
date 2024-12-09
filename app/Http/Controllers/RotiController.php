<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roti;

class RotiController extends Controller
{
    public function index()
    {
        $roti = Roti::all();
        return view('roti.index', compact('roti'));
    }

    public function create()
    {
        return view('roti.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_roti' => 'required',
            'deskripsi' => 'required',
        ]);

        Roti::create($request->all());
        return redirect('/')->with('success', 'Roti berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $roti = Roti::findOrFail($id);
        return view('roti.edit', compact('roti'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_roti' => 'required',
            'deskripsi' => 'required',
        ]);

        $roti = Roti::findOrFail($id);
        $roti->update($request->all());
        return redirect('/')->with('success', 'Roti berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $roti = Roti::findOrFail($id);
        $roti->delete();
        return redirect('/')->with('success', 'Roti berhasil dihapus.');
    }
}
