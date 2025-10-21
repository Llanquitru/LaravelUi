<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gabinete extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca_gabinete',
        'serial_gabinete',
        'slug',
        'estado',
        'ram_tipo',
        'ram'
       
    ];

    public function agrupado(){

        return $this->hasOne(Agrupado::class);
    }

    public function getRouteKeyName(){

        return 'slug';
     }
}
