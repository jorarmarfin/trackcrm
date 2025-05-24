<div>
    <form class="grid grid-cols-4 gap-3" wire:submit="saveSupplier">
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
            <label for="contact_name" class="form-label
                @error('contact_name') is-invalid @enderror">
                Descripción
            </label>
            <input type="text" class="form-text" id="contact_name"
                   wire:model="form.contact_name" placeholder="Descripción">
            @error('form.contact_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone" class="form-label
                @error('phone') is-invalid @enderror">
                Teléfono
            </label>
            <input type="text" class="form-text" id="phone"
                   wire:model="form.phone" placeholder="Teléfono">
            @error('form.phone')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email" class="form-label
                @error('email') is-invalid @enderror">
                Email
            </label>
            <input type="email" class="form-text" id="email"
                   wire:model="form.email" placeholder="Email">
            @error('form.email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="website" class="form-label
                @error('website') is-invalid @enderror">
                Website
            </label>
            <input type="text" class="form-text" id="website"
                   wire:model="form.website" placeholder="Website">
            @error('form.website')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="currency" class="form-label
                @error('currency') is-invalid @enderror">
                Moneda
            </label>
            <input type="text" class="form-text" id="currency"
                   wire:model="form.currency" placeholder="Moneda">
            @error('form.currency')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="cost_price" class="form-label
                @error('cost_price') is-invalid @enderror">
                Precio
            </label>
            <input type="number" class="form-text" id="cost_price"
                   wire:model="form.cost_price" placeholder="Precio" step="0.01" min="0">
            @error('form.cost_price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="notes" class="form-label
                @error('notes') is-invalid @enderror">
                Notas
            </label>
            <textarea type="number" class="form-text" id="notes"
                   wire:model="form.notes" placeholder="Notas">
                {{$form->notes}}
            </textarea>
            @error('form.notes')
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
            @if($isEdit)
                <button type="button" wire:click="cancelSupplier" class="btn-secondary">
                    Cancelar
                </button>
            @endif
        </div>

    </form>
    <div class="table-container">
        <table>
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Nombre contacto</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Sitio web</th>
                <th>Precio de costo</th>
                <th>Notas</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->contact_name }}</td>
                    <td>{{ $supplier->phone }}</td>
                    <td>{{ $supplier->email }}</td>
                    <td>{{ $supplier->website }}</td>
                    <td>{{ $supplier->cost_price }}</td>
                    <td>{{ $supplier->notes }}</td>
                    <td>
                        <button wire:click="editSupplier({{ $supplier->id }})" class="btn-secondary">
                            Editar
                        </button>
                        <button @click="$dispatch('alert-delete',{{$supplier->id}})" class="btn-danger">
                            Eliminar
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $suppliers->links() }}
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
                $wire.deleteSupplier(category_id);
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
