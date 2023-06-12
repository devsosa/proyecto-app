<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
        'nombreProyecto',
        'fuenteFondos',
        'montoPlanificado',
        'montoPatrocinado',
        'montoFondosPropios'
    ];

    /* protected static function boot() {
        parent::boot();
        static::creating(function($proyecto){
            $proyecto->user_id = auth()->id();
        });
    } */
}
