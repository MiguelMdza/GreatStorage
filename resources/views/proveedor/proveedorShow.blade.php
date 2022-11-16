<x-plantilla titulo="GreatStorage - Detalles Proveedor" tab="GreatStorage - Detalles Proveedor">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Detalles de Proveedor</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <p>{{ $proveedor->nombre }}</p>
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <p>{{ $proveedor->correo }}</p>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <p>{{ $proveedor->telefono }}</p>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <p>{{ $proveedor->direccion }}</p>
            </div>
            <div class="form-group">
                <label for="responsable">Responsable</label>
                <p>{{ $proveedor->responsable }}</p>
            </div>
        </div>
        <div class="modal-footer">
            <a href="/proveedor" class="btn btn-default">Regresar</a>
        </div>
    </div>
</div>
</x-plantilla>