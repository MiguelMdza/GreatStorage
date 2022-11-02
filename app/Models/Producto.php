<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','descripcion','precio', 'proveedor_id'];
    public $timestamps = false;

    //Producto tiene UN proveedor
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }
}
