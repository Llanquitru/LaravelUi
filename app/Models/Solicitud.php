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
<<<<<<< HEAD
        'user_id'
=======
        'id_user'
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
    ];

    public function user(){

<<<<<<< HEAD
        return $this->belongsTo(User::class);
=======
        return $this->belongsTo(User::class, 'id_user');
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
     }

     public function getRouteKeyName(){

        return 'slug';
     }
}
