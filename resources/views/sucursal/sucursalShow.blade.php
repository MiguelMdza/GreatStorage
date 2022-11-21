<x-plantilla tab="GreatStorage - Detalle Sucursal" titulo="GreatStorage - Detalle Sucursal">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Detalles de Sucursal</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="nombre"><b>Nombre</b></label>
                <p>{{ $sucursal->nombre }}</p>
            </div>
            <div class="form-group">
                <label for="correo"><b>Dirección</b></label>
                <p>{{ $sucursal->direccion }}</p>
            </div>
            <div class="form-group">
                <label for="telefono"><b>Teléfono</b></label>
                <p>{{ $sucursal->telefono }}</p>
            </div>
            <div class="form-group">
                <label for="direccion"><b>Encargado</b></label>
                <p>{{ $sucursal->encargado }}</p>
            </div>
            <div class="form-group">
                <label for="proveedor"><b>Proveedor(es)</b></label>
                <ul>
                    @foreach ($sucursal->proveedores as $proveedor)
                        <li>{{ $proveedor->nombre }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="modal-footer">
            <a href="/sucursal" class="btn btn-default">Regresar</a>
        </div>
    </div>
</div>
</x-plantilla>