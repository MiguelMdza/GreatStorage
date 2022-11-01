<x-plantilla titulo="Editar Pedido" tab="Editar Pedido">
    <a href="/pedido/">Mostrar Pedidos</a>
    
    <form action="/pedido/{{ $pedido->id }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="id_proveedor">Proveedor</label>
        <input type="text" name="id_proveedor" id="id_proveedor" value={{ $id_proveedor ?? old('id_proveedor') }}>
        @error('id_proveedor')
            <i>{{ $message }}</i>
        @enderror
        <br><br>
        <label for="id_producto">Producto</label>
        <input type="text" name="id_producto" id="id_producto" value={{ $id_producto ?? old('id_producto') }}>
        @error('id_producto')
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