<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Producto</title>
</head>
<body>
    <h1>Crear Producto</h1>
    <form action="/producto/{{ $producto->id }}" method="post">
        @csrf
        @method('patch')

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}">
        <br>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion">
        <br>
        <label for="precio">Precio</label>
        <input type="number" step="0.01" name="precio" id="precio">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>