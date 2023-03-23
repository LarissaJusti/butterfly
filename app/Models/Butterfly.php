<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Butterfly extends Model
{
    use HasFactory;

    // Indica o nome da tabela do banco de dados
    protected $table = "butterflies";

    // Indica os campos que podem ser preenchidos pelo usuário
    protected $fillable = [
        'nome',
        'especie',
        'idade',
        'sexo',
        'cor',
        'significado',
        'foto'
    ];
}
