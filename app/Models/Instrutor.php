<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrutor extends Model {
    use HasFactory;

    protected $table = 'instrutores';
    
    
    //Não protege nenhum campo
    protected $guarded = [];

    //Não exibe esses campos
    protected $hidden = ['senha', 'created_at', 'updated_at', 'deleted_at'];

     /**
     * Caso existe foto, retorna a url completa da thumbnail
     *  */  
    public function getCrefUrlAttribute() {
        if (!$this->cref) return null;
            return asset('storage/cref/'.$this->cref);
    }

}
