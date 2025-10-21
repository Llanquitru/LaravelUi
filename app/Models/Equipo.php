<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'pantalla',
        'gabinete',
        'serial_gabinete',
        'serial_pantalla',
        'marca_pantalla',
        'img',
        'slug'
    ];
}
