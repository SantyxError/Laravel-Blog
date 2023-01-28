<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    // Como la tabla no se llama Users se indica a continuación su nombre
    protected $table =  'usuarios';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];



    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    //Añadimos un nuevo método en el modelo de Usuario , que se llame igual que el modelo 
    //con el que queremos conectar

    public function posts()
    {

        //HasMany-> un usuario puede tener varios posts
        //'App\Models\Post' -> Ruta del modelo con el que lo relacionamos. En este caso relacionamos Usuarios con Post
        //'autor_id' y 'id' -> La relacion entre ambas tablas 

        return $this->hasMany('App\Models\Post', 'autor_id', 'id');
    }
}
