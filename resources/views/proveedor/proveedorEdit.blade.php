<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proveedor</title>
</head>
<body>
    <h1>Editar Proveedor</h1>

    <a href="/proveedor/">Mostrar Proveedores</a>
    
    <form action="/proveedor/{{ $proveedor->id }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') ?? $proveedor->nombre }}">
        @error('nombre')
            <i>{{ $message }}</i>
        @enderror
        <br><br>
        <label for="correo">Correo</label>
        <input type="email" name="correo" id="correo" value="{{ old('correo') ?? $proveedor->correo }}">
        @error('correo')
            <i>{{ $message }}</i>
        @enderror
        <br><br>
        <label for="telefono">Teléfono</label>
        <input type="tel" name="telefono" id="telefono" value="{{ old('telefono') ?? $proveedor->telefono }}">
        @error('telefono')
            <i>{{ $message }}</i>
        @enderror
        <br><br>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" value="{{ old('direccion') ?? $proveedor->direccion }}">
        @error('direccion')
            <i>{{ $message }}</i>
        @enderror
        <br><br>
        <label for="responsable">Responsable</label>
        <input type="text" name="responsable" id="responsable" value="{{ old('responsable') ?? $proveedor->responsable }}">
        @error('responsable')
            <i>{{ $message }}</i>
        @enderror
        <br><br>

        <input type="submit" value="Editar">
    </form>
</body>
</html>