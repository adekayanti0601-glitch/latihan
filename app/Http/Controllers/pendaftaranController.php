<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    // FORM PENDAFTARAN
    public function daftar()
    {
        return view('daftar');
    }

    // HASIL PENDAFTARAN
    public function hasilDaftar(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'departemen' => 'required',
            'alasan' => 'required'
        ]);

        $data = $request->all();

        return view('hasil_pendaftaran', compact('data'));
    }

    // FORM ASPIRASI
    public function aspirasi()
    {
        return view('aspirasi');
    }

    // HASIL ASPIRASI
    public function hasilAspirasi(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'kategori' => 'required',
            'aspirasi' => 'required'
        ]);

        $data = $request->all();
        $data['waktu'] = now()->format('d-m-Y H:i');

        return view('hasil_aspirasi', compact('data'));
    }
}