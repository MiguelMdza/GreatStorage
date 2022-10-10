<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Listado de Proveedores</h1>

    <a href="/proveedor/create">Crear Nuevo Proveedor</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Responsable</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($proveedores as $proveedor)
            <tr>
                <td>{{  $proveedor->id }}</td>
                <td>
                    <a href="/proveedor/{{ $proveedor->id }}">
                        {{ $proveedor->nombre }}
                    </a>
                </td>
                <td>{{ $proveedor->correo }}</td>
                <td>{{ $proveedor->telefono }}</td>
                <td>{{ $proveedor->direccion }}</td>
                <td>{{ $proveedor->responsable }}</td>
                <td>
                    <a href="proveedor/{{ $proveedor->id }}/edit">Editar</a>
                </td>
                <td>
                    <form action="/proveedor/{{ $proveedor->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>