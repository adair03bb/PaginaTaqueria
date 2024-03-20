<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenTaco extends Model
{
    protected $fillable = [
        'nombre_cliente', 'al_pastor', 'de_carnitas', 'de_bistec', 'de_barbacoa',
    ];
}
