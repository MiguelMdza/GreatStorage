<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursals = Sucursal::all();
        return view('sucursal.sucursalIndex', compact('sucursals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        return view('sucursal.sucursalCreate', compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'direccion' => 'required|max:255',
            'telefono' => 'required|integer|digits:10',
            'encargado' => 'max:255',
        ]);

        $sucursal = Sucursal::create($request->all());
        $sucursal->proveedores()->attach($request->proveedor_id);

        return redirect('/sucursal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursal $sucursal)
    {
        return view('sucursal.sucursalShow', compact('sucursal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function edit(Sucursal $sucursal)
    {
        $proveedores = Proveedor::all();
        return view('sucursal.sucursalEdit', compact('sucursal', 'proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sucursal $sucursal)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'direccion' => 'required|max:255',
            'telefono' => 'required|integer|digits:10',
            'encargado' => 'max:255',
        ]);

        Sucursal::where('id', $sucursal->id)->update($request->except('_token', '_method', 'proveedor_id'));

        $sucursal->proveedores()->sync($request->proveedor_id);
        return redirect('/sucursal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursal $sucursal)
    {
        /* Primero quito los proveedores asociados a la sucursal*/
        $sucursal->proveedores()->detach();
        /* Después elimino el registro de la sucursal */
        $sucursal->delete();

        return redirect('/sucursal');
    }
}
