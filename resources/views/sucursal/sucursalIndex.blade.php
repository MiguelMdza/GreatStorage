<x-plantilla tab="Listado de Sucursales" titulo="Listado de Sucursales">

    <a href="/sucursal/create">Crear Nueva Sucursal</a>

    <table border = "1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Encargado</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($sucursals as $sucursal)
            <tr>
                <td>{{ $sucursal->id }}</td>
                <td>
                    <a href="/sucursal/{{ $sucursal->id }}">
                    {{ $sucursal->nombre }}
                </td>
                <td>{{ $sucursal->direccion }}</td>
                <td>{{ $sucursal->telefono }}</td>
                <td>{{ $sucursal->encargado }}</td>
                <td>
                    <a href="/sucursal/{{ $sucursal->id }}/edit">Editar</a>
                </td>
                <td>
                    <form action="/sucursal/{{ $sucursal->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-plantilla>