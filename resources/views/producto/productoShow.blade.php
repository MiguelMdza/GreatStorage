<x-plantilla titulo="GreatStorage - Detalles Producto" tab="GreatStorage - Detalles Producto">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detalles de Producto</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <p>{{ $producto->nombre }}</p>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <p>{{ $producto->descripcion }}</p>
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <p>{{ $producto->precio }}</p>
                </div>
                <div class="form-group">
                    <label for="proveedor_id">Proveedor</label>
                    <p>{{ $producto->proveedor->nombre }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <a href="/producto" class="btn btn-default">Regresar</a>
            </div>
        </div>
    </div>
    </x-plantilla>