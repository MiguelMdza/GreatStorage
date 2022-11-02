<x-plantilla tab="Editar Sucursal" titulo="Editar Sucursal">
    <form action="/sucursal/{{ $sucursal->id }}" method="post">
        @csrf
        @method('patch')

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        @error('nombre')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion">
        @error('direccion')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="telefono">
        @error('telefono')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="encargado">Encargado</label>
        <input type="text" name="encargado" id="encargado">
        @error('encargado')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <input type="submit" value="Guardar">
    </form>
</x-plantilla>