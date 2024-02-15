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

    public function Categoria(){
        return $this->hasOne(Categoria::class,'id', 'ID_Categoria');
    }   
}

