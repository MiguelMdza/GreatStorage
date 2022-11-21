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
                        <label for="nombre"><b>Nombre</b></label>
                        <input class="form-control" type="text" name="nombre" id="nombre" required value={{ $nombre ?? old('nombre') }}>
                        @error('nombre')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="direccion"><b>Dirección</b></label>
                        <input class="form-control" type="text" name="direccion" id="direccion" required value={{ $direccion ?? old('direccion') }}>
                        @error('direccion')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono"><b>Teléfono</b></label>
                        <input class="form-control" type="text" name="telefono" id="telefono" required value={{ $telefono ?? old('telefono') }}>
                        @error('telefono')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="encargado"><b>Encargado</b></label>
                        <input class="form-control" type="text" name="encargado" id="encargado" value={{ $encargado ?? old('encargado') }}>
                        @error('encargado')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="proveedor_id"><b>Selecciona Proveedor(es)</b></label>
                        @foreach($proveedores as $proveedor)
                            <br><input type="checkbox" name="proveedor_id[]" value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</input>
                        @endforeach
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