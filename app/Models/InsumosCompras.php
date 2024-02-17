<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsumosCompras extends Model
{
    use HasFactory;
    protected $table='insumoscompras';
    protected $primaryKey='id';
    protected $fillable=['cantidad','costo','ID_Insumo', 'fecha'];
    protected $guarded=[];
    public $timestamps=false;

    public function Insumos(){
        return $this->hasOne(Insumos::class,'id', 'ID_Insumo');
    } 
}
