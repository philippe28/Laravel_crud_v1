<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    
    protected $fillable = [
        
                'nome', 'cep','endereco','bairro','cidade','estado'
        
            ];

}
