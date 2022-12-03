<x-plantilla tab="GreatStorage - Sucursales" titulo="GreatStorage - Sucursales">

    <div class="container-xl">
        <div class="table-responsive">
            {{-- ALERTA DE ÉXITO --}}
            <x-notificacion></x-notificacion>
            
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 style="color: #fff">Lista de <b>Sucursales</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="/sucursal/create" class="btn btn-success"><i
                                    class="material-icons">&#xE147;</i>Añadir Sucursal</a>
                            <a href="papelera-sucursal" class="btn btn-secondary"><i
                                class="bi bi-trash3"></i>Papelera</a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead style="color: black">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Encargado</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
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
                                    @can('update', $sucursal)
                                        <a href="/sucursal/{{ $sucursal->id }}/edit">Editar</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('delete', $sucursal)
                                        <form action="/sucursal/{{ $sucursal->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Eliminar">
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-plantilla>
