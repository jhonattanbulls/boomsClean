<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $functions = [
            'Desinfectantes',
            'Desengrasantes',
            'Anticalcáreos',
            'Quitamanchas',
            'Abrillantadores',
            'Ambientadores',
        ];

        foreach ($functions as $function) {
            DB::table('categories')->insert([
                'name' =>  $function,
            ]);
        }

    }
}
