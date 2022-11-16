<x-plantilla titulo="GreatStorage - Crear Proveedor" tab="GreatStorage - Crear Proveedor">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/proveedor" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Añadir Proveedor</h4>
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
                        <label for="correo">Correo</label>
                        <input class="form-control" type="email" name="correo" id="correo" value={{ $correo ?? old('correo') }}>
                        @error('correo')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input class="form-control" type="tel" name="telefono" id="telefono" value={{ $telefono ?? old('telefono') }}>
                        @error('telefono')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input class="form-control" type="text" name="direccion" id="direccion" value={{ $direccion ?? old('direccion') }}>
                        @error('direccion')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="responsable">Responsable</label>
                        <input class="form-control" type="text" name="responsable" id="responsable" value={{ $responsable ?? old('responsable') }}>
                        @error('responsable')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/proveedor" class="btn btn-default">Cancelar</a>
                    <input type="submit" class="btn btn-success" value="Añadir">
                </div>
            </form>
        </div>
    </div>
</x-plantilla>