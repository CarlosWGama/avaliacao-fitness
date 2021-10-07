<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    /**
     * Caso existe foto, retorna a url completa da thumbnail
     *  */  
    public function getFotoUrlAttribute() {
        if (!$this->foto) return asset('storage/alunos/aluno.png');
            return asset('storage/alunos/'.$this->foto);
    }
}
