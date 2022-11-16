<x-plantilla tab="Crear Producto" titulo="Crear Producto">
    <form action="/producto" method="post">
        @csrf

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value={{ $nombre ?? old('nombre') }}>
        @error('nombre')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion" value={{ $descripcion ?? old('descripcion') }}>
        @error('descripcion')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="precio">Precio</label>
        <input type="number" step="0.01" name="precio" id="precio" value={{ $precio ?? old('precio') }}>
        @error('precio')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="proveedor_id">Proveedor</label>
        <select class="browser-default" name="proveedor_id" id="proveedor_id" required>
            <option selected disabled>Elije una opción</option>
            @foreach($proveedores as $proveedor)
                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Guardar">
    </form>
</x-plantilla>