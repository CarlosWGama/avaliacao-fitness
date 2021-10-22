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

}
