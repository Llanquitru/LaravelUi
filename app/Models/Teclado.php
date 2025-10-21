<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teclado extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca_teclado',
        'serial_teclado',
        'tipo_teclado',
        'slug',

        
       
    ];

    public function agrupado(){
        return $this->hasOne(Agrupado::class);
    }


    public function getRouteKeyName(){

        return 'slug';
     }
}
