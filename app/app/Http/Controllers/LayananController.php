<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LayananController extends Controller
{

    public function index()
    {

        $layanan = Layanan::all();


        return view('layanan.index', compact('layanan'));
    }


    public function create(Request $request)
    {

        $layanan = new Layanan();

        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->harga_layanan = $request->harga_layanan;
        $layanan->save();

        return back();
    }
}
