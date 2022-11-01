<x-plantilla titulo="Listado de Pedidos" tab="Listado de Pedidos">
    <a href="/pedido/create">Crear Nuevo Pedido</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Proveedor</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->proveedor->nombre }}</td>
                <td>{{ $pedido->productos->nombre }}</td>
                <td>{{ $pedido->cantidad }}</td>
                <td>{{ $pedido->fecha }}</td>
                <td>
                    <a href="pedido/{{ $pedido->id }}/edit">Editar</a>
                </td>
                <td>
                    <form action="/pedido/{{ $pedido->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-plantilla>