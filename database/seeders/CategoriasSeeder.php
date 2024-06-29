<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Datos ficticios para categorías
        $categorias = [
            [
                'nombre' => 'Electrónica',
                'descripcion' => 'Productos electrónicos y dispositivos',
            ],
            [
                'nombre' => 'Ropa',
                'descripcion' => 'Prendas de vestir y accesorios',
            ],
            [
                'nombre' => 'Hogar',
                'descripcion' => 'Artículos para el hogar y decoración',
            ],
            [
                'nombre' => 'Libros',
                'descripcion' => 'Libros de diversas categorías',
            ],
            [
                'nombre' => 'Deportes',
                'descripcion' => 'Artículos y equipos deportivos',
            ],
            [
                'nombre' => 'Alimentos',
                'descripcion' => 'Productos alimenticios y bebidas',
            ],
            [
                'nombre' => 'Juguetes',
                'descripcion' => 'Juguetes para niños y entretenimiento',
            ],
            [
                'nombre' => 'Salud',
                'descripcion' => 'Productos y servicios relacionados con la salud',
            ],
            [
                'nombre' => 'Automotriz',
                'descripcion' => 'Piezas y accesorios para automóviles',
            ],
            [
                'nombre' => 'Mascotas',
                'descripcion' => 'Productos para cuidado y entretenimiento de mascotas',
            ],
        ];

        // Insertar los datos en la tabla 'categorias'
        foreach ($categorias as $categoria) {
            DB::table('categorias')->insert([
                'nombre' => $categoria['nombre'],
                'descripcion' => $categoria['descripcion'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
