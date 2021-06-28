<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tikect extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status'
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    //Especifico el tipo de datos a recibir
    protected $casts = [
        'name' => 'string',
        'status' => 'boolean'
    ];

    //Relacion tickers : un tickers puede pertenecer a muchos usuarios
    public function users () {
        return $this->belongsToMany(User::class, "users_tikects");
    }
    
}
