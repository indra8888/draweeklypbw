<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        mahasiswa::updateOrCreate(
            ['nim' => '2024001'], // ← kunci: cek berdasarkan NIM
            [
                'nama'    => 'Budi Santoso',
                'jurusan' => 'Teknik Informatika',
                'email'   => 'budi@example.com',
            ]
        );

        mahasiswa::updateOrCreate(
            ['nim' => '2024002'],
            [
                'nama'    => 'Siti Aminah',
                'jurusan' => 'Sistem Informasi',
                'email'   => 'siti@example.com',
            ]
        );
    }
}