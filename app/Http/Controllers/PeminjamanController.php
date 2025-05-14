<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bmn = peminjaman::latest()->paginate(10);
        return view('user.index', compact('bmn'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        return view('user.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pic' => 'required',
            'nama' => 'required',
            'spt' => 'required',
            'barang' => 'required',
            'kondisi_barang' => 'required',
        ]);

        $bmn = new peminjaman;
        $bmn->pic = $request->pic;
        $bmn->nama = $request->nama;
        $bmn->spt = $request->spt;
        $bmn->barang = $request->barang;
        $bmn->kondisi_barang = $request->kondisi_barang;
        $bmn->tanggal = now();

        if ($request->hasFile('spt')) {
            $bmn->spt = $request->file('spt')->store('spt');
        }

        $bmn->save();
        return redirect()->route('bmn.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $bmn = peminjaman::find($id);
        return view('edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pic' => 'required',
            'nama' => 'required',
            'spt' => 'required',
            'barang' => 'required',
            'kondisi_barang' => 'required',
            'tanggal' => 'required',
        ]);

        $bmn = peminjaman::find($id);
        $bmn->pic = $request->pic;
        $bmn->nama = $request->nama;
        $bmn->spt = $request->spt;
        $bmn->barang = $request->barang;
        $bmn->kondisi_barang = $request->kondisi_barang;
        $bmn->tanggal = $request->tanggal;

        if ($request->hasFile('spt')) {
            Storage::delete($bmn->spt);
            $bmn->spt = $request->file('spt')->store('spt');
        }

        $bmn->save();
        return redirect()->route('bmn.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bmn = peminjaman::find($id);
        Storage::delete($bmn->spt);
        $bmn->delete();
        return redirect()->route('bmn.index')->with('success', 'Data berhasil dihapus');
    }
}
