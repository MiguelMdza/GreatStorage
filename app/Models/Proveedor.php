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
}
