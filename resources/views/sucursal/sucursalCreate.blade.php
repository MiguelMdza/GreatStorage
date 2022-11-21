<x-plantilla tab="GreatStorage - Crear Sucursal" titulo="GreatStorage - Crear Sucursal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/sucursal" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Añadir Sucursal</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" required value={{ $nombre ?? old('nombre') }}>
                        @error('nombre')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input class="form-control" type="text" name="direccion" id="direccion" required value={{ $direccion ?? old('direccion') }}>
                        @error('direccion')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input class="form-control" type="text" name="telefono" id="telefono" required value={{ $telefono ?? old('telefono') }}>
                        @error('telefono')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="encargado">Encargado</label>
                        <input class="form-control" type="text" name="encargado" id="encargado" value={{ $encargado ?? old('encargado') }}>
                        @error('encargado')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="proveedor_id">Selecciona Proveedor(es)</label>
                        <select class="form-control" name="proveedor_id[]" value={{ old('proveedor_id') }} multiple required>
                            @foreach($proveedores as $proveedor)
                                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                            @endforeach
                        </select>
                        @error('proveedor_id')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/sucursal" class="btn btn-default">Cancelar</a>
                    <input type="submit" class="btn btn-success" value="Añadir">
                </div>
            </form>
        </div>
    </div>
</x-plantilla>