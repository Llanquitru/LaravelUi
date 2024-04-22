<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $fillable = [
        'oficina',
        'equipo',
        'codigo',
        'requerimiento',
        'descripcion',
        'slug',
        'id_user'
    ];

    public function user(){

        return $this->belongsTo(User::class, 'id_user');
     }

     public function getRouteKeyName(){

        return 'slug';
     }
}
