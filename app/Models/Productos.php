<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table='productos';
    protected $primaryKey='id';
    protected $fillable=['nombre', 'precio', 'ID_Categoria'];
    protected $guarded=[];
    public $timestamps=false;

    public function insumosProductos()
    {
        return $this->hasMany(InsumosProductos::class, 'ID_Producto', 'id');
    }

    public function Categoria(){
        return $this->belongsTo(Categoria::class,'ID_Categoria');
    }   
}

