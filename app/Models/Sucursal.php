<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','direccion','telefono', 'encargado'];
    public $timestamps = false;

    //Sucursal puede tener muchos Proovedores
    public function proveedores()
    {
        //belongsToMany es para relación M:N
        return $this->belongsToMany(Proveedor::class);
    }
}
