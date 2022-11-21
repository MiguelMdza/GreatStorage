<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'nombre' => 'Coca-Cola 500ml',
            'descripcion' => 'Bebida gasificada sabor cola de 500ml',
            'precio' => 15,
            'proveedor_id' => 1,
        ]);
        Producto::create([
            'nombre' => 'Doritos Nacho 60gr',
            'descripcion' => 'Frituras sabor queso nacho de 60gr',
            'precio' => 20,
            'proveedor_id' => 2,
        ]);
        Producto::create([
            'nombre' => 'Fanta 2.5lts',
            'descripcion' => 'Bebida gasificada sabor naranja de 2.5lts',
            'precio' => 38,
            'proveedor_id' => 1,
        ]);
        Producto::create([
            'nombre' => 'Chokis',
            'descripcion' => 'Galletas de chispas de chocolate',
            'precio' => 12,
            'proveedor_id' => 3,
        ]);
        Producto::create([
            'nombre' => 'Pan Blanco',
            'descripcion' => 'Pan blanco para sandwich',
            'precio' => 50,
            'proveedor_id' => 4,
        ]);
        Producto::create([
            'nombre' => 'Tostadas Deshidratadas',
            'descripcion' => 'Tostadas deshidratadas 50pzs',
            'precio' => 22,
            'proveedor_id' => 5,
        ]);
        Producto::create([
            'nombre' => 'Donitas Glaseadas',
            'descripcion' => 'Donitas blancas glaseadas 8pzs',
            'precio' => 17.5,
            'proveedor_id' => 4,
        ]);
    }
}
