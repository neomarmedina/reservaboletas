<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    //Especifico el tipo de datos a recibir
    protected $casts = [
        'name' => 'string',
    ];

    //Relacion users con tickers : un usuario tiene muchos tikects
    public function tikects () {
        return $this->belongsToMany(Tikect::class, "users_tikects");
    }
}
