<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('obats')->insert([
            [
                'nama_obat' => 'Neuralgin',
                'kemasan' => 'Strip',
                'harga' => '10000',
            ],
            [
                'nama_obat' => 'Panadol',
                'kemasan' => 'Strip',
                'harga' => '5000',
            ],
            [
                'nama_obat' => 'kalmethasone',
                'kemasan' => 'Strip',
                'harga' => '7000',
            ]
        ]);
    }
}
