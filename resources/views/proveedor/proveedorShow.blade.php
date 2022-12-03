<x-plantilla titulo="GreatStorage - Detalles Proveedor" tab="GreatStorage - Detalles Proveedor">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Detalles de Proveedor</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="nombre"><b>Nombre</b></label>
                <p>{{ $proveedor->nombre }}</p>
            </div>
            <div class="form-group">
                <label for="correo"><b>Correo</b></label>
                <p>{{ $proveedor->correo }}</p>
            </div>
            <div class="form-group">
                <label for="telefono"><b>Teléfono</b></label>
                <p>{{ $proveedor->telefono }}</p>
            </div>
            <div class="form-group">
                <label for="direccion"><b>Dirección</b></label>
                <p>{{ $proveedor->direccion }}</p>
            </div>
            <div class="form-group">
                <label for="responsable"><b>Responsable</b></label>
                <p>{{ $proveedor->responsable }}</p>
            </div>
            <div class="form-group">
                <label for="sucursal"><b>Sucursal(es)</b></label>
                <ul>
                    @foreach ($proveedor->sucursales as $sucursal)
                        <li>{{ $sucursal->nombre }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="modal-footer">
            <a href="/proveedor" class="btn btn-default">Regresar</a>
        </div>
    </div>
</div>
</x-plantilla>