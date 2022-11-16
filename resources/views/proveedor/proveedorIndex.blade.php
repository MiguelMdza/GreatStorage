<x-plantilla titulo="GreatStorage - Proveedores" tab="GreatStorage - Proveedores">
    

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 style="color: #fff">Lista de <b>Proveedores</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="/proveedor/create" class="btn btn-success"><i class="material-icons">&#xE147;</i>Añadir Proveedor</a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead style="color: black">
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
                    </thead>
                    <tbody>
                        @foreach ($proveedores as $proveedor)
                        <tr>
                            <td>{{ $proveedor->id }}</td>
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