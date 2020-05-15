<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    protected $table = 'noticias';

    protected $fillable = [
        'autor', 'titulo', 'mensagem',
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function autor()
    {
        return $this->belongsTo('App\User');
    }



}
