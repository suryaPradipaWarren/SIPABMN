<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class BarangController extends Controller
{
    function index()
    {
        $barangs=barang::all();
        return view('barang.index', compact('barangs'));
    }
}
