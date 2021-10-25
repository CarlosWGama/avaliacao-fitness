<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlunosAnamnese extends Model
{
    use HasFactory;


    use SoftDeletes;

    protected $guarded = [];

    //Retorna o aluno
    public function aluno() {
        return $this->belongsTo(Aluno::class);
    }
}
