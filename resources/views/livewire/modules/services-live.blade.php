<div>
    <form class="grid grid-cols-4 gap-3" wire:submit="saveService">
        <div class="form-group">
            <label for="name" class="form-label
                @error('name') is-invalid @enderror">
                Nombre
            </label>
            <input type="text" class="form-text" id="name"
                   wire:model="form.name" placeholder="Nombre">
            @error('form.name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description" class="form-label
                @error('description') is-invalid @enderror">
                Descripción
            </label>
            <input type="text" class="form-text" id="description"
                   wire:model="form.description" placeholder="Descripción">
            @error('form.description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price" class="form-label
                @error('price') is-invalid @enderror">
                Precio
            </label>
            <input type="text" class="form-text" id="price"
                   wire:model="form.price" placeholder="Precio">
            @error('form.price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="supplier_id" class="form-label
                @error('supplier_id') is-invalid @enderror">
                Proveedor
            </label>
            <select class="form-select" id="supplier_id"
                    wire:model="form.supplier_id">
                <option value="">Seleccione un proveedor</option>
                @foreach($ddl_suppliers as $key => $supplier)
                    <option value="{{ $key }}">{{ $supplier }}</option>
                @endforeach
            </select>
            @error('form.supplier_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="">
            <button type="submit" class="btn-primary">
                @if($isEdit)
                    Actualizar
                @else
                    Guardar
                @endif
            </button>
        </div>

    </form>
    <div class="table-container">
        <table>
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio venta</th>
                <th>Proveedor</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>{{ $service->price }}</td>
                    <td>{{ $service->supplier?->details }}</td>
                    <td>
                        <button wire:click="editService({{ $service->id }})" class="btn-secondary">
                            Editar
                        </button>
                        <button @click="$dispatch('alert-delete',{{$service->id}})" class="btn-danger">
                            Eliminar
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $services->links() }}
        </div>
    </div>
</div>
@script
<script>
    $wire.on('alert-delete', (category_id) => {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminarlo'
        }).then((result) => {
            if (result.isConfirmed) {
                $wire.deleteService(category_id);
                Swal.fire(
                    'Eliminado!',
                    'La categoría ha sido eliminada.',
                    'success'
                )
            }
        })
    });
</script>
@endscript
