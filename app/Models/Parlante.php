<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parlante extends Model
{
    use HasFactory;

    protected $fillable = [
        'parlante_modelo',
        'parlante_serial',
        'slug',

        
       
    ];


    public function agrupado(){

return $this->hasOne(Agrupado::class);

    }

    
    public function getRouteKeyName(){

        return 'slug';
     }
}
