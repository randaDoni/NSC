<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('beritas')->insert([
            'judul' => 'sample judul',
            'deskripsi' => 'sample deskripsi',
            'gambar' => 'desain.jpg',
            'tanggalPembukaan' => now(),
            'tanggalPenutupan' => now(),
            'region' => 'sample region',
            'created_at'=>now(),
            'kategoriBeasiswa' => 'S1',
            'linkPendaftaran' => 'www.sample.com',
            'id' => 1,
            "jenisBerita" => "beasiswa",
            "approve" => "1"
        ]);
        DB::table('beritas')->insert([
            'judul' => 'sample judul kompetisi',
            'tingkatKompetisi' => 'Umum',
            'tanggalPembukaan' => now(),
            'tanggalPenutupan' => now(),
            'tanggalPengumuman' =>now(),
            'gambar' => 'gypem.jpg',
            'linkPendaftaran' => 'www.sample.com',
            'deskripsi' => 'sample deskripsi kompetisi',
            'id' => 1,
            "jenisBerita" => "Kompetisi",
            "approve" => "1"
        ]);
    }
}
