<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedor::create([
            'nombre' => 'Coca-Cola',
            'correo' => 'cocacola@contacto.com',
            'telefono' => '3365656565',
            'direccion' => 'Av. Unión #2323',
            'responsable' => 'Juan López',
        ]);
        Proveedor::create([
            'nombre' => 'Sabritas',
            'correo' => 'sabritas@contacto.com',
            'telefono' => '3390909090',
            'direccion' => 'Periférico Norte #8888',
            'responsable' => 'Adrián Santoyo',
        ]);
        Proveedor::create([
            'nombre' => 'Gamesa',
            'correo' => 'gamesa@contacto.com',
            'telefono' => '3387128723',
            'direccion' => 'López Cotilla #800',
            'responsable' => 'Miguel Mendoza',
        ]);
        Proveedor::create([
            'nombre' => 'Bimbo',
            'correo' => 'bimbo@contacto.com',
            'telefono' => '3300990099',
            'direccion' => 'Ramón Corona #800',
            'responsable' => 'Oliver Quintero',
        ]);
        Proveedor::create([
            'nombre' => 'Tostadería La Morenita',
            'correo' => 'morenita@contacto.com',
            'telefono' => '3318765343',
            'direccion' => 'San Inocencio #100',
            'responsable' => 'Juan Martínez',
        ]);
    }
}
