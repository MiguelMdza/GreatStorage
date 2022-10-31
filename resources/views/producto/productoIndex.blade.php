<x-plantilla tab="Listado de Productos" titulo="Listado de Productos">

    <a href="/producto/create">Crear Nuevo Producto</a>

    <table border = "1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>
                    <a href="/producto/{{ $producto->id }}">
                    {{ $producto->nombre }}
                </td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->precio }}</td>
                <td>
                    <a href="/producto/{{ $producto->id }}/edit">Editar</a>
                </td>
                <td>
                    <form action="/producto/{{ $producto->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-plantilla>