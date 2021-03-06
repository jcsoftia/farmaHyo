<?php

use Illuminate\Database\Seeder;
use App\Models\Laboratorio;

class LaboratorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laboratorio::create([
            'nombre'	=>  "FARMINDUSTRIA",
            'descripcion' => 'descripcion de Laboratorio '
        ]);
        Laboratorio::create([
            'nombre'	=>  "TEVA",
            'descripcion' => 'descripcion de Laboratorio '
        ]);
        Laboratorio::create([
            'nombre'	=>  "INDUQUIMICA",
            'descripcion' => 'descripcion de Laboratorio '
        ]);
        Laboratorio::create([
            'nombre'  =>  "NOVARTIS",
            'descripcion' => 'descripcion de Laboratorio '
        ]);
        Laboratorio::create([
            'nombre'	=>  "BAGO",
            'descripcion' => 'descripcion de Laboratorio '
        ]);
        Laboratorio::create([
            'nombre'	=>  "ROCHE",
            'descripcion' => 'descripcion de Laboratorio '
        ]);
    }
}
