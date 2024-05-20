<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'correo',
        'departamento',
        'trabajo',
        'user_id'
    ];


    public function user(){

        return $this->belongsTo(User::class);
     }

     
     public function getRouteKeyName(){

        return 'slug';
     }
}
