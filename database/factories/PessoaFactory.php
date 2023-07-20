<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PessoaFactory extends Factory
{
    protected $model = \App\Models\Pessoa::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'cpf' => $this->faker->cpf(true),
            'rg' => $this->faker->rg,
            'endereco' => $this->faker->address,
            'cidade' => $this->faker->city,
            'estado' => $this->faker->state,
            'pais' => $this->faker->country,
            'telefone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
        ];
    }
}