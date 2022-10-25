<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $table = "users";
    protected $primaryKey = "id";
    
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**  Encriptar la contraseña mediante metodo 'bcrypt'
     * en estos casos debe nombrarse de la siguiente forma
     * Sintaxis:
     * Accion(set)Campo[o nombre del atributo](Password) y al final Attribute
    */


    //version inicial
    // public function setPasswordAttribute ($value) {
    //     //     $this->attributes['password']=bcrypt($value);
    //     // }
    

    // Vesrión anterior.
    // public function password(): Attribute
    // {
    //     return new Attribute(
    //         set: function($value){ return bcrypt($value); }
    //     );
    // }

    public function password(): Attribute 
    {
        return new Attribute(
            set: fn ($value) => bcrypt($value)
        );
    } 
    
    // public function slug(): Attribute 
    // {
    //     return new Attribute(
    //         set: fn ($value) => $value
    //     );
    // } 
}

