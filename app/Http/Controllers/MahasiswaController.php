<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // 2. Buat fungsi index
    public function index()
    {
        // 3. Ambil data mahasiswa (kita ambil data pertama karena hanya ada 1)
        $data_mahasiswa = Mahasiswa::first(); 

        // 4. Kirim data ke view
        //    Kita akan buat view ini di langkah berikutnya
        return view('mahasiswa.index', [
            'mhs' => $data_mahasiswa 
        ]);
    }
}