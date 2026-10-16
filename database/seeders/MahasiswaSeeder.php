<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            [
                'nim' =>'251011701080',
                'nama' =>'Hirnika Sari',
                'jk' => 'P',
                'prodi' =>'Sistem Informasi',
                'no_telp' =>'08568208116',
                'alamat' =>'Bogor',
                
            ],
        ]);
    }
}
