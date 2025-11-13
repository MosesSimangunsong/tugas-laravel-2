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
            'user_name' => 'Moses Simangunsong',
            'email_akademik' => '11s23011@del.ac.id',
            'program_studi' => 'S1 Informatika',
            'kelas' => 'IF 1',
            'wali_mahasiswa' => 'Arnaldo Marulitua Sinaga, S.T., M.InfoTech.',
            'jalur_usm' => 'PMDK',
            'status_akhir' => 'Aktif',
            'angkatan' => '2023',
            'tanggal_masuk' => '2023-08-16',
        ]);
    }
}