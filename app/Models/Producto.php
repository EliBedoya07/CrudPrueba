<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table='productos';
    protected $primaryKey='id';
    protected $fillable=['id_categoria','nombre','cantidad','precio'];
    public $timestamps=false;

    public function Categoria(){
        return $this->hasOne(Categoria::class,'id','id_categoria');
    }
}


