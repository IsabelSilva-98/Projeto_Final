<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbConsulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'diagnostico',
        'antecedentes',
        'medicacao',
        'id_triagem',
        'id_utente',
        'id_equipa',
        'nome_utente',
        'data'
    ];
}
