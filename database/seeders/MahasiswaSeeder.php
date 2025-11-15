<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        
        Mahasiswa::create([
            'foto' => 'img/Foto.jpg',
            'nim' => '11S23011',
            'user_name' => 'ifs23011',
            'email_akademik' => 'ifs23011@students.del.ac.id',
            'program_studi' => 'S1 Informatika',
            'kelas' => '13IF1',
            'wali_mahasiswa' => 'Herimanto, S.Kom., M.Kom',
            'jalur_usm' => 'USM 1',
            'status_akhir' => 'Aktif',
            'angkatan' => '2023',
            'tanggal_masuk' => '2023-08-16',
        ]);
    }
}