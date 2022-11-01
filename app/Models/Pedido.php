<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = ['proveedor_id','producto_id','cantidad', 'fecha'];
    public $timestamps = false;

    //Producto tiene UN proveedor
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    //Proveedor tiene muchos productos
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
