<x-plantilla titulo="GreatStorage - Editar Proveedor" tab="GreatStorage - Editar Proveedor">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/proveedor/{{ $proveedor->id }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="modal-header">
                    <h4 class="modal-title">Editar Proveedor</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre"><b>Nombre</b></label>
                        <input class="form-control" type="text" name="nombre" id="nombre" required value="{{ old('nombre') ?? $proveedor->nombre }}">
                        @error('nombre')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="correo"><b>Correo</b></label>
                        <input class="form-control" type="email" name="correo" id="correo" required value="{{ old('correo') ?? $proveedor->correo }}">
                        @error('correo')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono"><b>Teléfono</b></label>
                        <input class="form-control" type="tel" name="telefono" id="telefono" required value="{{ old('telefono') ?? $proveedor->telefono }}">
                        @error('telefono')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="direccion"><b>Dirección</b></label>
                        <input class="form-control" type="text" name="direccion" id="direccion" required value="{{ old('direccion') ?? $proveedor->direccion }}">
                        @error('direccion')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="responsable"><b>Responsable</b></label>
                        <input class="form-control" type="text" name="responsable" id="responsable" value="{{ old('responsable') ?? $proveedor->responsable }}">
                        @error('responsable')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/proveedor" class="btn btn-default">Cancelar</a>
                    <input type="submit" class="btn btn-success" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
</x-plantilla>