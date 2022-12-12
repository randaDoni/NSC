<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'email' => 'admin@gmail.com',
        ],[
            'email' => 'admin@gmail.com',
            'password' => bcrypt("admin123"),
            'name' => 'Admin',
            'email_verified_at' => now(),
        ]);

        DB::table('beritas')->insert([
            'judul' => 'sample judul',
            'deskripsi' => 'sample deskripsi',
            'gambar' => 'sample.jpg',
            'tanggalPembukaan' => now(),
            'tanggalPenutupan' => now(),
            'region' => 'sample region',
            'created_at'=>now(),
            'kategoriBeasiswa' => 's1',
            'linkPendaftaran' => 'www.sample.com',
            'id' => 1,
            "jenisBerita" => "beasiswa"
        ]);
        DB::table('beritas')->insert([
            'judul' => 'sample judul kompetisi',
            'tingkatKompetisi' => 'umum',
            'tanggalPembukaan' => now(),
            'tanggalPenutupan' => now(),
            'tanggalPengumuman' =>now(),
            'gambar' => 'sample.jpg',
            'linkPendaftaran' => 'www.sample.com',
            'deskripsi' => 'sample deskripsi kompetisi',
            'id' => 1,
            "jenisBerita" => "Kompetisi"
        ]);
    }
}
