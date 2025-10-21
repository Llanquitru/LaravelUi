<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mause extends Model
{
    use HasFactory;
    protected $fillable = [
        'marca_raton',
        'serial_raton',
        'tipo_raton',
        'slug'
        
       
    ];

    public function agrupado(){

        return $this->hasOne(Agrupado::class);
    }

    public function getRouteKeyName(){

        return 'slug';
     }
}
