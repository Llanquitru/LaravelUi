<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Http\Controllers\SolicitudController;
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
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
        'admin',
        'img'
=======
        'admin'
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
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
        'password' => 'hashed',
    ];



<<<<<<< HEAD
    public function pruebas(){
        return $this->hasMany(Prueba::class);
    }
=======
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660


    public function solicituds(){
        return $this->hasMany(Solicitud::class);
    }

    public function funcionarios(){
        return $this->hasMany(Funcionario::class);
    }
<<<<<<< HEAD

    public function insumos(){
        return $this->hasMany(Insumo::class);
    }

=======
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
}
