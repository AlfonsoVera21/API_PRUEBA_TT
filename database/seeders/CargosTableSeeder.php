<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cargos')->insert([
            [
                'codigo' => 'C001',
                'nombre' => 'Gerente',
                'activo' => true,
                'idUsuarioCreacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codigo' => 'C002',
                'nombre' => 'Asistente',
                'activo' => true,
                'idUsuarioCreacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
