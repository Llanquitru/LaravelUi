<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
        'nombre_funcionario',
        'correo',
        'departamento',
        'trabajo',
        'user_id',
        'slug'
    ];

  
     public function agrupado(){
        return $this->hasOne(Agrupado::class);
     }
=======
        'nombre',
        'oficio',
        'departamento',
        'descripcion',
        'slug',

        'user_id'
    ];

>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
    public function getRouteKeyName(){

        return 'slug';
     }

<<<<<<< HEAD



=======
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
     public function user(){

        return $this->belongsTo(User::class, 'user_id');
     }
<<<<<<< HEAD

=======
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
}
