<x-plantilla titulo="GreatStorage - Detalles Producto" tab="GreatStorage - Detalles Producto">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detalles de Producto</h4>
            </div>
            <div class="modal-body">
                <div class="flex-container">
                    <div class="flex-left">
                        @foreach ($producto->productoImages as $productoImage)
                            <img src="{{ \Storage::url($productoImage->ubicacion) }}" width="200px" alt="Imagen Producto">
                        @endforeach
                    </div>
                    <div class="flex-right">
                        <div class="form-group">
                            <label for="nombre"><b>Nombre</b></label>
                            <p>{{ $producto->nombre }}</p>
                        </div>
                        <div class="form-group">
                            <label for="descripcion"><b>Descripción</b></label>
                            <p>{{ $producto->descripcion }}</p>
                        </div>
                        <div class="form-group">
                            <label for="precio"><b>Precio</b></label>
                            <p>{{ $producto->precio }}</p>
                        </div>
                        <div class="form-group">
                            <label for="proveedor_id"><b>Proveedor</b></label>
                            <p>{{ $producto->proveedor->nombre }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="/producto" class="btn btn-default">Regresar</a>
            </div>
        </div>
    </div>
    </x-plantilla>