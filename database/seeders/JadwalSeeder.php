<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwals')->insert([
            [
                'hari' => 'Senin',
                'jam_mulai' => '08:00',
                'jam_selesai' => '11:30',
                'id_dokter' => 1,
            ],
            [
                'hari' => 'Selasa',
                'jam_mulai' => '08:00',
                'jam_selesai' => '10:00',
                'id_dokter' => 2,
            ],
            [
                'hari' => 'Rabu',
                'jam_mulai' => '15:30',
                'jam_selesai' => '18:00',
                'id_dokter' => 3,
            ],
            [
                'hari' => 'Kamis',
                'jam_mulai' => '17:00',
                'jam_selesai' => '19:30',
                'id_dokter' => 1,
            ],
            [
                'hari' => 'Rabu',
                'jam_mulai' => '18:00',
                'jam_selesai' => '20:00',
                'id_dokter' => 4,
            ],

        ]);
    }
}
