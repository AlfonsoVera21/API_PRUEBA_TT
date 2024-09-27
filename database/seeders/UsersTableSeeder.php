<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'usuario' => 'jdoe',
                'primerNombre' => 'Juan',
                'segundoNombre' => 'Carlos',
                'primerApellido' => 'Doe',
                'segundoApellido' => 'Smith',
                'idDepartamento' => 1,
                'idCargo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario' => 'mrodriguez',
                'primerNombre' => 'Maria',
                'segundoNombre' => 'Fernanda',
                'primerApellido' => 'Rodriguez',
                'segundoApellido' => 'Gonzalez',
                'idDepartamento' => 2,
                'idCargo' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
