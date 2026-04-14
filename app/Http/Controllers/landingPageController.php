<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Menampilkan halaman utama landing page.
     */
    public function index()
    {
        // Data Program Kerja (Bisa diambil dari Database nantinya)
        $programKerja = [
            [
                'judul' => 'Workshop Teknologi 2026',
                'harga' => 'Gratis',
                'gambar' => 'proker-1.jpg', // Pastikan file ada di public/images/
            ],
            [
                'judul' => 'Seminar Karir Nasional',
                'harga' => 'Gratis',
                'gambar' => 'proker-2.jpg',
            ],
            [
                'judul' => 'Lomba Inovasi Digital',
                'harga' => 'Rp 50.000',
                'gambar' => 'proker-3.jpg',
            ],
        ];

        // Data Divisi
        $divisi = [
            ['nama' => 'Riset & Teknologi', 'slug' => 'ristek', 'foto' => 'divisi-ristek.jpg'],
            ['nama' => 'Minat & Bakat', 'slug' => 'minat-bakat', 'foto' => 'divisi-minat.jpg'],
            ['nama' => 'Humas', 'slug' => 'humas', 'foto' => 'divisi-humas.jpg'],
            ['nama' => 'Pengabdian Masyarakat', 'slug' => 'pengmas', 'foto' => 'divisi-pengmas.jpg'],
        ];

        return view('landing', compact('programKerja', 'divisi'));
    }
}