<x-plantilla titulo="GreatStorage - Crear Producto" tab="GreatStorage - Crear Producto">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/producto" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Añadir Producto</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" value={{ $nombre ?? old('nombre') }}>
                        @error('nombre')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input class="form-control" type="text" name="descripcion" id="descripcion" value={{ $descripcion ?? old('descripcion') }}>
                        @error('descripcion')
                            <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input class="form-control" type="number" step="0.01" name="precio" id="precio" value={{ $precio ?? old('precio') }}>
                        @error('precio')
                            <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="proveedor_id">Proveedor</label>
                        <select class="form-control" name="proveedor_id" id="proveedor_id" required>
                            <option selected disabled>Elije una opción</option>
                            @foreach($proveedores as $proveedor)
                                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/producto" class="btn btn-default">Cancelar</a>
                    <input type="submit" class="btn btn-success" value="Añadir">
                </div>
            </form>
        </div>
    </div>
</x-plantilla>