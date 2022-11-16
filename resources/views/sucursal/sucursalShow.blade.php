<x-plantilla tab="GreatStorage - Detalle Sucursal" titulo="GreatStorage - Detalle Sucursal">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Detalles de Sucursal</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <p>{{ $sucursal->nombre }}</p>
            </div>
            <div class="form-group">
                <label for="correo">Dirección</label>
                <p>{{ $sucursal->direccion }}</p>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <p>{{ $sucursal->telefono }}</p>
            </div>
            <div class="form-group">
                <label for="direccion">Encargado</label>
                <p>{{ $sucursal->encargado }}</p>
            </div>
        </div>
        <div class="modal-footer">
            <a href="/sucursal" class="btn btn-default">Regresar</a>
        </div>
    </div>
</div>
</x-plantilla>