<div>
    <form class="grid grid-cols-4 gap-3" wire:submit="saveSetting">
        <div class="form-group">
            <label for="key" class="form-label
                @error('key') is-invalid @enderror">
                Llave
            </label>
            <input type="text" class="form-text" id="key"
                   wire:model="form.key" placeholder="Llave">
            @error('form.key')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="value" class="form-label
                @error('value') is-invalid @enderror">
                Valor
            </label>
            <input type="text" class="form-text" id="value"
                   wire:model="form.value" placeholder="Valor">
            @error('form.value')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="pt-12">
            <button type="submit" class="btn-primary">
                @if($isEdit)
                    Actualizar
                @else
                    Guardar
                @endif
            </button>
            @if($isEdit)
                <button type="button" wire:click="resetForm" class="btn-secondary">
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
                <th>Valor</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($settings as $setting)
                <tr>
                    <td>{{ $setting->key }}</td>
                    <td>{{ $setting->value }}</td>
                    <td>
                        <button wire:click="editSetting({{ $setting->id }})" class="btn-secondary">
                            Editar
                        </button>
                        <button @click="$dispatch('alert-delete',{{$setting->id}})" class="btn-danger">
                            Eliminar
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $settings->links() }}
        </div>
    </div>
</div>
@script
<script>
    $wire.on('alert-delete', (setting_id) => {
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
                $wire.deleteSetting(setting_id);
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
