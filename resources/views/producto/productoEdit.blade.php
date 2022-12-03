<x-plantilla titulo="GreatStorage - Editar Producto" tab="GreatStorage - Editar Producto">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/producto/{{ $producto->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="modal-header">
                    <h4 class="modal-title">Editar Producto</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre"><b>Nombre</b></label>
                        <input class="form-control" type="text" name="nombre" id="nombre" required value="{{ old('nombre') ?? $producto->nombre }}">
                        @error('nombre')
                        <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="descripcion"><b>Descripción</b></label>
                        <input class="form-control" type="text" name="descripcion" id="descripcion" required value="{{ old('descripcion') ?? $producto->descripcion }}">
                        @error('descripcion')
                            <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="precio"><b>Precio</b></label>
                        <input class="form-control" type="number" step="0.01" name="precio" id="precio" required value="{{ old('precio') ?? $producto->precio }}">
                        @error('precio')
                            <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="proveedor_id"><b>Proveedor</b></label>
                        <select class="form-control" name="proveedor_id" id="proveedor_id" required>
                            <option selected disabled>Elije una opción</option>
                            @foreach($proveedores as $proveedor)
                                <option value="{{ $proveedor->id }}" {{ $producto->proveedor->id == $proveedor->id ? 'selected' : '' }}>{{ $proveedor->nombre }}</option>
                            @endforeach
                        </select>
                        @error('proveedor_id')
                            <i>{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="productoImage"><b>Imagen</b></label>
                        <input class="form-control" type="file" name="productoImage" accept="image/png, image/jpeg">
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