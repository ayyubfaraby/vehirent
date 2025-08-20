<?php

namespace App\Controllers;
use App\Models\MobilModel;

class MobilController extends BaseController
{
    public function detail($id)
    {
        $mobilModel = new MobilModel();    

        $mobil = $mobilModel->find($id);

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
