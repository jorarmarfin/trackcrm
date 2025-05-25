<div>
    <form class="grid grid-cols-4 gap-3" wire:submit="saveClient">
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
            <label for="document_type" class="form-label
                @error('document_type') is-invalid @enderror">
                Tipo de documento
            </label>
            <select class="form-select" id="document_type"
                    wire:model="form.document_type">
                <option value="">Seleccione una categoría</option>
                @foreach($document_types as $document_type)
                    <option value="{{ $document_type }}">{{ $document_type }}</option>
                @endforeach
            </select>
            @error('form.document_type')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="document_number" class="form-label
                @error('document_number') is-invalid @enderror">
                Número de documento
            </label>
            <input type="text" class="form-text" id="document_number"
                   wire:model="form.document_number" placeholder="Número de documento">
            @error('form.document_number')
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
                Correo electrónico
            </label>
            <input type="text" class="form-text" id="email"
                   wire:model="form.email" placeholder="Correo electrónico">
            @error('form.email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="address" class="form-label
                @error('address') is-invalid @enderror">
                Dirección
            </label>
            <input type="text" class="form-text" id="address"
                   wire:model="form.address" placeholder="Dirección">
            @error('form.address')
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
            <textarea class="form-textarea" id="notes"
                      wire:model="form.notes" placeholder="Notas"></textarea>
            @error('form.notes')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="status" class="form-label
                @error('status') is-invalid @enderror">
                Estatus
            </label>
            <select class="form-select" id="status"
                    wire:model="form.status">
                <option value="">Seleccione una categoría</option>
                @foreach($status_clients as $status_client)
                    <option value="{{ $status_client }}">{{ $status_client }}</option>
                @endforeach
            </select>
            @error('form.status')
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
                <th>Tipo documento</th>
                <th>Número de documento</th>
                <th>Teléfono</th>
                <th>Correo electrónico</th>
                <th>Dirección</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->document_type }}</td>
                    <td>{{ $client->document_number }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->status }}</td>

                    <td>
                        <button wire:click="editClient({{ $client->id }})" class="btn-secondary">
                            Editar
                        </button>
                        <button @click="$dispatch('alert-delete',{{$client->id}})" class="btn-danger">
                            Eliminar
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $clients->links() }}
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
                $wire.deleteClient(category_id);
                Swal.fire(
                    'Eliminado!',
                    'El cliente ha sido eliminado.',
                    'success'
                )
            }
        })
    });
</script>
@endscript
