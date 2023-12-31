<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama_pengguna' => 'ifka',
                'username' => 'ifka',
                'password' => bcrypt('admin'),
                'no_hp' => '08125478965',
                'no_ktp' => '1234567890123456',
                'alamat' => 'Jl. Arimbi No. 54',
                'role' => 'admin',
            ],
            [
                'nama_pengguna' => 'dr. Wahyu',
                'username' => 'dr. Wahyu',
                'password' => bcrypt('dokter'),
                'no_hp' => '081234567890',
                'no_ktp' => '1234567890123456',
                'alamat' => 'Jl. Kelud No. 122',
                'role' => 'dokter',
            ]
        ]);
    }
}
