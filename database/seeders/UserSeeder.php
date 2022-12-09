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
            'caption' =>'sample caption',
            'gambar' => 'sample.jpg',
            'tanggal' => now(),
            'region' => 'sample region',
            'created_at'=>now(),
            'kategoriBeasiswa' => 's1',
            'linkPendaftaran' => 'www.sample.com',
            'id' => 1
        ]);
    }
}
