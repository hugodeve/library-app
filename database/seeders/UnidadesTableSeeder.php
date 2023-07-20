<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Unidade;


class UnidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $names = [
            'Importação de unidades',
            'Importação de cargos',
            'Importação de setores',
            'Importação de pessoas',
            'Importação de cursos',
            'Importação de matrículas',
            'Certificados em lote',
        ];

        foreach ($names as $name) {
            $unidade = new Unidade();
            $unidade->nome = $name;
            $unidade->save();
        }
    }
}