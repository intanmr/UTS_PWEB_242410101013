<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3'
        ], [
            'username.required' => 'Username tidak boleh kosong',
            'username.min' => 'Username minimal 3 karakter'
        ]);

        session([
            'username' => $request->username
        ]);

        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        if (!session()->has('username')) {
            return redirect('/');
        }

        $username = session('username');

        $ringkasan = [
            'total_obat' => 3,
            'obat_tersedia' => 1,
            'obat_hampir_habis' => 1,
            'obat_habis' => 1
        ];

        $keunggulan = [
            'Kemudahan dalam monitoring stok obat.',
            'Membantu pengelolaan supplier dan kategori obat.',
            'Pengelolaan data obat apotek lebih efisien dan terstruktur.'
        ];

        return view('dashboard', compact('username', 'ringkasan', 'keunggulan'));
    }

    public function pengelolaan()
    {
        if (!session()->has('username')) {
            return redirect('/');
        }
        
        $obat = [
            [
                'kode' => 'OBT001',
                'nama' => 'Paracetamol',
                'kategori' => 'Tablet',
                'jenis' => 'Obat Sakit Kepala',
                'supplier' => 'PT Sehat Farma',
                'stok' => 50,
                'expired' => '2027-05-12',
                'harga' => 10000,
                'status' => 'Tersedia'
            ],
            [
                'kode' => 'OBT002',
                'nama' => 'Amoxicillin',
                'kategori' => 'Kapsul',
                'jenis' => 'Antibiotik',
                'supplier' => 'CV Nusantara Medis',
                'stok' => 8,
                'expired' => '2026-11-20',
                'harga' => 15000,
                'status' => 'Hampir Habis'
            ],
            [
                'kode' => 'OBT003',
                'nama' => 'Vitamin C',
                'kategori' => 'Suplemen',
                'jenis' => 'Vitamin',
                'supplier' => 'PT Medika Jaya',
                'stok' => 0,
                'expired' => '2026-09-15',
                'harga' => 12000,
                'status' => 'Habis'
            ],
            [
                'kode' => 'OBT004',
                'nama' => 'Vermint',
                'kategori' => 'Kapsul',
                'jenis' => 'Obat Demam',
                'supplier' => 'PT Farma Sentosa',
                'stok' => 18,
                'expired' => '2027-01-10',
                'harga' => 8000,
                'status' => 'Tersedia'
            ],
            [
                'kode' => 'OBT005',
                'nama' => 'Siladex',
                'kategori' => 'Sirup',
                'jenis' => 'Obat Flu dan Batuk',
                'supplier' => 'CV Nusantara Medis',
                'stok' => 6,
                'expired' => '2026-08-25',
                'harga' => 20000,
                'status' => 'Hampir Habis'
            ]
        ];
        
        $statistik = [
            'jumlah_obat' => count($obat),
            'jumlah_kategori' => count(array_unique(array_column($obat, 'kategori'))),
            'hampir_habis' => count(array_filter($obat, function ($item) {
                return $item['status'] == 'Hampir Habis';
            })),
            'habis' => count(array_filter($obat, function ($item) {
                return $item['status'] == 'Habis';
            }))
        ];

        return view('pengelolaan', compact('obat', 'statistik'));
    }

    public function profile()
    {
        if (!session()->has('username')) {
            return redirect('/');
        }

        $username = session('username');

        $admin = [
            'username' => $username,
            'role' => 'Admin Apotek',
            'status' => 'Aktif',
            'email' => 'admin@medicacare.com',
            'no_hp' => '081234567890',
            'alamat' => 'Jl. Kesehatan No. 10, Jember'
        ];

        return view('profile', compact('admin'));
    }

    public function logout()
    {
        session()->forget('username');
        return redirect('/');
    }
}