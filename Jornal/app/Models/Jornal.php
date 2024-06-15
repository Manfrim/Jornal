<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornal extends Model
{
    protected $table = 'jornal'; // Se o nome da tabela for diferente de "jornal", você precisa especificá-lo aqui
    protected $primaryKey = 'id'; // Se o nome da chave primária for diferente de "id", você precisa especificá-lo aqui

    protected $fillable = [
        'nome_materia',
        'resumo_materia',
        'materia_p1',
        'materia_p2',
        'materia_p3',
        'materia_p4',
        'imagem_capa',
        'imagem_1',
        'imagem_2',
        // Adicione outros atributos aqui se necessário
    ];
}
