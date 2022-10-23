<x-plantilla tab="Crear Producto" titulo="Crear Producto">
    <form action="/producto" method="post">
        @csrf

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion">
        <br>
        <label for="precio">Precio</label>
        <input type="number" step="0.01" name="precio" id="precio">
        <br>
        <input type="submit" value="Guardar">
    </form>
</x-plantilla>