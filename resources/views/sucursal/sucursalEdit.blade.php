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
                        <label for="nombre"><b>Nombre</b></label>
                        <input class="form-control" type="text" name="nombre" id="nombre" required value="{{ old('nombre') ?? $sucursal->nombre }}">
                        @error('nombre')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="direccion"><b>Dirección</b></label>
                        <input class="form-control" type="text" name="direccion" id="direccion" required value="{{ old('direccion') ?? $sucursal->direccion }}">
                        @error('direccion')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono"><b>Teléfono</b></label>
                        <input class="form-control" type="text" name="telefono" id="telefono" required value="{{ old('telefono') ?? $sucursal->telefono }}">
                        @error('telefono')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="encargado"><b>Encargado</b></label>
                        <input class="form-control" type="text" name="encargado" id="encargado" value="{{ old('encargado') ?? $sucursal->encargado }}">
                        @error('encargado')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="proveedor_id"><b>Selecciona Proveedor(es)</b></label>
                        @foreach($proveedores as $proveedor)
                            <br>
                            <input type="checkbox" name="proveedor_id[]" value="{{ $proveedor->id }}" {{ array_search($proveedor->id, $sucursal->proveedores->pluck('id')->toArray()) !== false ? 'checked' : ''}}>
                                {{ $proveedor->nombre }}
                            </input>
                        @endforeach
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