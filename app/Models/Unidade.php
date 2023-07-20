<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    public function pessoas()
    {
        return $this->belongsToMany(Pessoa::class, 'integrations', 'unidade_id', 'pessoa_id');
    }
}
