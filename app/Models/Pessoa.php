<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'rg',
        'endereco',
        'cidade',
        'estado',
        'pais',
        'telefone',
        'email',
    ];

    public function unidades()
    {
        return $this->belongsToMany(Unidade::class);
    }
}