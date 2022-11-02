<x-plantilla titulo="Editar Producto">
    <form action="/producto/{{ $producto->id }}" method="post">
        @csrf
        @method('patch')

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') ?? $producto->nombre }}">
        @error('nombre')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion') ?? $producto->descripcion }}">
        @error('descripcion')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="precio">Precio</label>
        <input type="number" step="0.01" name="precio" id="precio" value="{{ old('precio') ?? $producto->precio }}">
        @error('precio')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="proveedor_id">Proveedor</label>
        <select name="proveedor_id" id="proveedor_id" required>
            <option selected disabled>Elije una opción</option>
            @foreach($proveedores as $proveedor)
                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Guardar">
    </form>
</x-plantilla>