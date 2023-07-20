<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB; 

class PessoasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('pt_BR');

        for ($i = 0; $i <= 10; $i++) {
            DB::table('pessoas')->insert([
                'nome' => $faker->name,
                'cpf' => $faker->cpf(true),
                'rg' => $faker->rg,
                'endereco' => $faker->address,
                'cidade' => $faker->city,
                'estado' => $faker->state,
                'pais' => $faker->country,
                'telefone' => $faker->phoneNumber,
                'email' => $faker->email,
            ]);
        }
    }
}