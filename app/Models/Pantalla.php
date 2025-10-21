<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pantalla extends Model
{
    use HasFactory;
    protected $fillable = [
        'marca_pantalla',
        'serial_pantalla',
        'slug',
        'estado'
        
       
    ];

    public function agrupado(){
        return $this-> hasMany(Agrupado::class);
    }

    public function getRouteKeyName(){

        return 'slug';
     }
}
