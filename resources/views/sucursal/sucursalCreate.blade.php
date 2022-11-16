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
                        <input class="form-control" type="text" name="nombre" id="nombre">
                        @error('nombre')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input class="form-control" type="text" name="direccion" id="direccion">
                        @error('direccion')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input class="form-control" type="text" name="telefono" id="telefono">
                        @error('telefono')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="encargado">Encargado</label>
                        <input class="form-control" type="text" name="encargado" id="encargado">
                        @error('encargado')
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