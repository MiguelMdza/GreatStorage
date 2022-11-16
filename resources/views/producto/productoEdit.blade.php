<x-plantilla titulo="GreatStorage - Editar Producto" tab="GreatStorage - Editar Producto">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/producto/{{ $producto->id }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="modal-header">
                    <h4 class="modal-title">Editar Producto</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" value="{{ old('nombre') ?? $producto->nombre }}">
                        @error('nombre')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input class="form-control" type="text" name="descripcion" id="descripcion" value="{{ old('descripcion') ?? $producto->descripcion }}">
                        @error('descripcion')
                            <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input class="form-control" type="number" step="0.01" name="precio" id="precio" value="{{ old('precio') ?? $producto->precio }}">
                        @error('precio')
                            <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="proveedor_id">Proveedor</label>
                        <select class="form-control" name="proveedor_id" id="proveedor_id" required>
                            <option selected disabled>Elije una opción</option>
                            @foreach($proveedores as $proveedor)
                                <option value="{{ $proveedor->id }}" {{ $producto->proveedor->id == $proveedor->id ? 'selected' : '' }}>{{ $proveedor->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/producto" class="btn btn-default">Cancelar</a>
                    <input type="submit" class="btn btn-success" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
</x-plantilla>