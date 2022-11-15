<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    //protected $guarded = ['id'];
    protected $fillable = ['nombre', 'correo', 'telefono', 'direccion', 'responsable'];

    public $timestamps = false; 

    //Proveedor tiene muchos productos
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    //Proveedor puede ir a muchas Sucursales
    public function sucursales()
    {
        //belongsToMany es para relación M:N
        return $this->belongsToMany(Sucursal::class);
    }
}
