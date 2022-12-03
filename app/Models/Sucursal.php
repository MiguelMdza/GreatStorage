<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sucursal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nombre', 'user_id', 'direccion', 'telefono', 'encargado'];
    public $timestamps = false;

    //Sucursal puede tener muchos Proovedores
    public function proveedores()
    {
        //belongsToMany es para relación M:N
        return $this->belongsToMany(Proveedor::class);
    }

    //una sucursal pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
