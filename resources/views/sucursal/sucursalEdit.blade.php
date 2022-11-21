<x-plantilla tab="GreatStorage - Editar Sucursal" titulo="GreatStorage - Editar Sucursal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/sucursal/{{ $sucursal->id }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="modal-header">
                    <h4 class="modal-title">Editar sucursal</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" required value="{{ old('nombre') ?? $sucursal->nombre }}">
                        @error('nombre')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input class="form-control" type="text" name="direccion" id="direccion" required value="{{ old('direccion') ?? $sucursal->direccion }}">
                        @error('direccion')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input class="form-control" type="text" name="telefono" id="telefono" required value="{{ old('telefono') ?? $sucursal->telefono }}">
                        @error('telefono')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="encargado">Encargado</label>
                        <input class="form-control" type="text" name="encargado" id="encargado" value="{{ old('encargado') ?? $sucursal->encargado }}">
                        @error('encargado')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="proveedor_id">Selecciona Proveedor(es)</label>
                        <select class="form-control" name="proveedor_id[]" multiple required>
                            @foreach($proveedores as $proveedor)
                                <option value="{{ $proveedor->id }}" {{ array_search($proveedor->id, $sucursal->proveedores->pluck('id')->toArray()) !== false ? 'selected' : ''}}>
                                    {{ $proveedor->nombre }}
                                </option>
                            @endforeach
                        </select>
                        @error('proveedor_id')
                            <i>{{ $message }}</i>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/sucursal" class="btn btn-default">Cancelar</a>
                    <input type="submit" class="btn btn-success" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
</x-plantilla>