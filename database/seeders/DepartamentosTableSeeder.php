<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departamentos')->insert([
            [
                'codigo' => 'D001',
                'nombre' => 'Recursos Humanos',
                'activo' => true,
                'idUsuarioCreacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codigo' => 'D002',
                'nombre' => 'Ventas',
                'activo' => true,
                'idUsuarioCreacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
