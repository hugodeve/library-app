<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UnidadeFactory extends Factory
{
    protected $model = \App\Models\Unidade::class;
    

    public function definition()
    {
        return [
            'nome' => $this->faker->nome,
        ];
    }
}