<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        DB::table('profiles')->insert([
            'nim' => '2141720237',
            'nama' => 'alvaro Hegel Ivanka',
            'jurusan' => 'D4-TI',
            'kelas' => '2H',
            'absen' => 6,
            'jk' => 'L'
        ]);
    }
}
