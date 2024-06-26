<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsumosProductos extends Model
{
    use HasFactory;
    protected $table='insumosproductos';
    protected $primaryKey='id';
    protected $fillable=['cantidad', 'ID_Insumo','ID_UnidadMedida','ID_Producto','ID_Categoria'];
    protected $guarded=[];
    public $timestamps=false;

    public function insumo(){
        return $this->belongsTo(Insumos::class, 'ID_Insumo');
    }

    public function producto(){
        return $this->belongsTo(Productos::class, 'ID_Producto');
    }

    public function unidadMedida(){
        return $this->belongsTo(UnidadMedidas::class, 'ID_UnidadMedida');
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'ID_Categoria');
    }
    
}
