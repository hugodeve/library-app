<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{
    protected $fillable = [
        'nome_integracao',
        'unidade_id',
        'pessoa_id',
        'status',
    ];
    
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }
}