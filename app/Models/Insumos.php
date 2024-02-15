<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insumos extends Model
{
    use HasFactory;
    protected $table='insumos';
    protected $primaryKey='id';
    protected $fillable=['nombre','descripcion','unidadMedida'];
    protected $guarded=[];
    public $timestamps=false;

    
}
