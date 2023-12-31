<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'dr. Tri',
                'alamat' => 'Jl. Indraprasta No. 72',
                'no_hp' => '082156897852',
                'id_poli' => 1,
            ],
            [
                'nama' => 'dr. Ghinaa',
                'alamat' => 'Jl. Sriwijaya No. 13',
                'no_hp' => '082365897852',
                'id_poli' => 2,
            ],
            [
                'nama' => 'dr. Zahra',
                'alamat' => 'Jl. Imam Bonjol No. 98',
                'no_hp' => '082356897854',
                'id_poli' => 3,
            ],
            [
                'nama' => 'dr. Wahyu',
                'alamat' => 'Jl. Kelud No. 122',
                'no_hp' => '081234567890',
                'id_poli' => 4,
            ],

        ]);
    }
}
