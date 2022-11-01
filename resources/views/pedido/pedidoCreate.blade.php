<x-plantilla titulo="Crear Pedido" tab="Crear Pedido">
    <a href="/pedido">Mostrar Pedidos</a>
    
    <form action="/pedido" method="POST">
        @csrf

        <label for="proveedor_id">Proveedor</label>
        <select name="proveedor_id" id="proveedor_id">
            <option selected disabled>Elija una opción: </option>
            @foreach($proveedores as $proveedor)
                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
            @endforeach
        </select>    
        @error('proveedor_id')
            <i>{{ $message }}</i>
        @enderror
        <br><br>
        <label for="producto_id">Producto</label>
        <select name="producto_id" id="producto_id">
            <option selected disabled>Elija una opción: </option>
            @foreach($productos as $producto)
                <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
            @endforeach
        </select> 
        @error('producto_id')
            <i>{{ $message }}</i>
        @enderror
        <br><br>
        <label for="cantidad">Cantidad</label>
        <input type="text" name="cantidad" id="cantidad" value={{ $cantidad ?? old('cantidad') }}>
        @error('cantidad')
            <i>{{ $message }}</i>
        @enderror
        <br><br>
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha" value={{ $fecha ?? old('fecha') }}>
        @error('fecha')
            <i>{{ $message }}</i>
        @enderror
        <br><br>

        <input type="submit" value="Guardar">
    </form>
</x-plantilla>