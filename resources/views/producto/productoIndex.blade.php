<x-plantilla titulo="GreatStorage - Productos" tab="GreatStorage - Productos">
    

    <div class="container-xl">
        <div class="table-responsive">
            {{-- ALERTA DE ÉXITO --}}
            <x-notificacion></x-notificacion>
            
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 style="color: #fff">Lista de <b>Productos</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="/producto/create" class="btn btn-success"><i class="material-icons">&#xE147;</i>Añadir Producto</a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead style="color: black">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Proveedor</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>
                                <a href="/producto/{{ $producto->id }}">
                                    {{ $producto->nombre }}
                                </a>
                            </td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>{{ $producto->proveedor->nombre }}</td>
                            <td>
                                <a href="/producto/{{ $producto->id }}/edit">Editar</a>
                            </td>
                            <td>
                                <form action="/producto/{{ $producto->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Eliminar">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-plantilla>