<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformacaoServer extends Model
{
    protected $table = 'table_informacao_server';

    protected $fillable = [
        'account', 'senha', 'alteracao'
    ];
}
