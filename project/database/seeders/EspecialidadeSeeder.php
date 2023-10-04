<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($total=1)
    {
        for($a=0; $a<$total; $a++){
            DB::table('especialidades')->insert([
                'nome' => Str::random(10),
                'descricao' => Str::random(50),
            ]);
        }
    }
}
