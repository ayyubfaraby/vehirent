<?php

namespace App\Controllers;

class MobilController extends BaseController
{
    public function detail($id)
    {
        // Data mobil (contoh hardcode, nanti bisa ambil dari DB)
        $mobilList = [
            1 => [
                'nama' => 'Avanza',
                'deskripsi' => 'Mobil keluarga nyaman, cocok untuk perjalanan jauh.',
                'harga' => 'Rp 350.000 / hari',
                'gambar' => 'https://via.placeholder.com/400x250'
            ],
            2 => [
                'nama' => 'Innova',
                'deskripsi' => 'Mobil premium dengan kapasitas besar dan nyaman.',
                'harga' => 'Rp 500.000 / hari',
                'gambar' => 'https://via.placeholder.com/400x250'
            ],
            3 => [
                'nama' => 'Fortune',
                'deskripsi' => 'Mobil premium dengan kapasitas besar dan nyaman.',
                'harga' => 'Rp 500.000 / hari',
                'gambar' => 'https://via.placeholder.com/400x250'
            ],
            4 => [
                'nama' => 'Mercedes',
                'deskripsi' => 'Mobil premium dengan kapasitas besar dan nyaman.',
                'harga' => 'Rp 500.000 / hari',
                'gambar' => 'https://via.placeholder.com/400x250'
            ],
            5 => [
                'nama' => 'Agia',
                'deskripsi' => 'Mobil premium dengan kapasitas besar dan nyaman.',
                'harga' => 'Rp 500.000 / hari',
                'gambar' => 'https://via.placeholder.com/400x250'
            ]
        ];

        $mobil = $mobilList[$id] ?? null;

        if (!$mobil) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Mobil dengan ID $id tidak ditemukan");
        }

        $data = [
            'mobil' => $mobil,
            'title' => $mobil['nama'] 
        ];

        return view('pages/detail', $data );
    }
}
