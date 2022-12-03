<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\ProductoImage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        $proveedores = Proveedor::all();
        return view('producto.productoIndex', compact('productos', 'proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        return view('producto.productoCreate', compact('proveedores'));
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
            'descripcion' => 'required|max:255',
            'precio' => 'required|numeric',
            'proveedor_id' => 'required',
        ]);

        $producto = Producto::create($request->all());

        //Archivos
        if ($request->file('productoImage')->isValid())
        {
            $ubicacion = $request->productoImage->store('public');
            $productoImage = new ProductoImage();
            $productoImage->ubicacion = $ubicacion;
            $productoImage->nombre_original = $request->productoImage->getClientOriginalName();
            $productoImage->mime = '';

            $producto->productoImages()->save($productoImage);
        }

        return redirect('/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('producto.productoShow', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $proveedores = Proveedor::all();
        return view('producto.productoEdit', compact('producto', 'proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'precio' => 'required|numeric',
        ]);

        $count=0;

        foreach($producto->productoImages as $productoImage)
        {
            $count++;
            $file = ProductoImage::whereId($productoImage->id)->firstOrFail();
            //En caso de que se suba más de un archivo, se eliminarán todos sus archivos relacionados
            if($count > 0){
                unlink(public_path(Storage::url($file->ubicacion)));
                $file->delete($file->id);
            }
        }

        //Archivos
        if ($request->file('productoImage')->isValid())
        {
            $ubicacion = $request->productoImage->store('public');
            $productoImage = new ProductoImage();
            $productoImage->ubicacion = $ubicacion;
            $productoImage->nombre_original = $request->productoImage->getClientOriginalName();
            $productoImage->mime = '';

            $producto->productoImages()->save($productoImage);
        }

        Producto::where('id', $producto->id)->update($request->except('_token', '_method', 'productoImage'));

        return redirect('/producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $count=0;

        foreach($producto->productoImages as $productoImage)
        {
            $count++;
            $file = ProductoImage::whereId($productoImage->id)->firstOrFail();
            //En caso de que se suba más de un archivo, se eliminarán todos sus archivos relacionados
            if($count > 0){
                unlink(public_path(Storage::url($file->ubicacion)));
                $file->delete($file->id);
            }
        }

        $producto->delete();

        return redirect('/producto');
    }
}
