<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsumosProductos extends Model
{
    use HasFactory;
    protected $table='insumosproductos';
    protected $primaryKey='id';
    protected $fillable=['cantidad', 'ID_Insumo', 'ID_Producto'];
    protected $guarded=[];
    public $timestamps=false;

    public function Insumos(){
        return $this->hasOne(Insumos::class,'id', 'ID_Insumo');
    }

    public function Productos(){
        return $this->hasOne(Productos::class,'id', 'ID_Producto');
    }
}
