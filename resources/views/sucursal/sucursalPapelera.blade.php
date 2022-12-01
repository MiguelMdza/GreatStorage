<x-plantilla tab="GreatStorage - Recuperar Sucursales" titulo="GreatStorage - Recuperar Sucursales">

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 style="color: #fff">Papelera de <b>Sucursales</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="/sucursal" class="btn btn-secondary"><i class="bi bi-trash3"></i>Regresar</a>
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
                            <th>Recuperar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sucursals as $sucursal)
                            <tr>
                                <td>{{ $sucursal->id }}</td>
                                <td>{{ $sucursal->nombre }}</td>
                                <td>{{ $sucursal->direccion }}</td>
                                <td>{{ $sucursal->telefono }}</td>
                                <td>{{ $sucursal->encargado }}</td>
                                <td>
                                    <a href="/papelera-sucursal/{{ $sucursal->id }}/recuperar">Recuperar</a>
                                </td>
                                <td>
                                    <form action="/papelera-sucursal/{{ $sucursal->id }}/eliminar" method="post">
                                        @csrf
                                        @method('delete')
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
