<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'id_categoria' => 1,
            'nombre' => 'hp',
            'cantidad' => 100,
            'precio' => '200.00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
