<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class VacinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=10; $i++){
            DB::table('vacinas')->insert([
                'nome'       => Str::random(10),
                'dose'       => Str::random(5),
                'descricao'  => Str::random(10)
            ]);
        }
    }
}
