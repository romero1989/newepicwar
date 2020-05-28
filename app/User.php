<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements  MustVerifyEmail
{
    use Notifiable;

    protected $attributes = [
        'cargo' => 0,
        'data' => '1900-01-01',
        'alteracao' => '1900-01-01',
        'cavecode' => 0,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','senha_numerica','pergunta_secreta','resposta_secreta'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function noticias()
    {
        return $this->hasMany('App\Noticias');
    }

    public static function getUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }
}
