<div>
    @if($iscreate || $isEdit)
        <form class="grid grid-cols-4 gap-3" wire:submit="saveInteraction">
            <div class="form-group">
                <label for="client_id" class="form-label
                @error('client_id') is-invalid @enderror">
                    Cliente
                </label>
                <select class="form-select" id="client_id"
                        wire:model="form.client_id">
                    <option value="">Seleccione un Cliente</option>
                    @foreach($ddl_clients as $key => $client)
                        <option value="{{ $key }}">{{ $client }}</option>
                    @endforeach
                </select>
                @error('form.client_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="service_id" class="form-label
                @error('service_id') is-invalid @enderror">
                    Servicios
                </label>
                <select class="form-select" id="service_id"
                        wire:model.live="form.service_id">
                    <option value="">Seleccione un servicio</option>
                    @foreach($ddl_services as $key => $service)
                        <option value="{{ $key }}">{{ $service }}</option>
                    @endforeach
                </select>
                @error('form.service_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="quantity" class="form-label
                @error('quantity') is-invalid @enderror">
                    Cantidad
                </label>
                <input type="number" class="form-text" id="quantity"
                       wire:model.live="form.quantity" placeholder="Cantidad" min="1" step="0.1">
                @error('form.quantity')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="cost_price" class="form-label
                @error('cost_price') is-invalid @enderror">
                    Precio de costo
                </label>
                <input type="number" class="form-text" id="cost_price"
                       wire:model="form.cost_price" placeholder="Precio de costo" min="0" step="0.1">
                @error('form.cost_price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="selling_price" class="form-label
                @error('selling_price') is-invalid @enderror">
                    Precio de venta
                </label>
                <input type="number" class="form-text" id="selling_price"
                       wire:model="form.selling_price" placeholder="Precio de venta" min="1" step="0.1">
                @error('form.selling_price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="gross_profit" class="form-label
                @error('gross_profit') is-invalid @enderror">
                    Ganancia
                </label>
                <input type="number" class="form-text" id="gross_profit"
                       wire:model="form.gross_profit" placeholder="Ganancia" min="1" step="0.1">
                @error('form.gross_profit')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="expiration_date" class="form-label
                @error('expiration_date') is-invalid @enderror">
                    Fecha de expiración
                </label>
                <input type="date" class="form-text" id="expiration_date"
                       wire:model="form.expiration_date" placeholder="Fecha de expiración" min="1" step="0.1">
                @error('form.expiration_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="next_action_date" class="form-label
                @error('next_action_date') is-invalid @enderror">
                    Fecha de siguiente acción
                </label>
                <input type="date" class="form-text" id="next_action_date"
                       wire:model="form.next_action_date" placeholder="Fecha de siguiente acción" min="1" step="0.1">
                @error('form.next_action_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="notified_at" class="form-label
                @error('notified_at') is-invalid @enderror">
                    Fecha de notificación
                </label>
                <input type="date" class="form-text" id="notified_at"
                       wire:model="form.notified_at" placeholder="Fecha de notificación" min="1" step="0.1">
                @error('form.notified_at')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="notify_by_whatsapp" class="form-label mb-2 inline-block">Notificar por Whatsapp</label>
                <div class="flex items-center">
                    <div class="relative inline-block w-12 align-middle select-none transition duration-200 ease-in">
                        <input type="checkbox" id="notify_by_whatsapp" wire:model="form.notify_by_whatsapp"
                               class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-transform duration-200 ease-in"/>
                        <label for="notify_by_whatsapp"
                               class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                    </div>
                    <span class="ml-2 text-sm">
                    {{ $form->notify_by_whatsapp  ? 'Activo' : 'Inactivo' }}
                </span>
                </div>
                @error('form.notify_by_whatsapp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="notify_by_email" class="form-label mb-2 inline-block">Notificar por email</label>
                <div class="flex items-center">
                    <div class="relative inline-block w-12 align-middle select-none transition duration-200 ease-in">
                        <input type="checkbox" id="notify_by_email" wire:model="form.notify_by_email"
                               class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-transform duration-200 ease-in"/>
                        <label for="notify_by_email"
                               class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                    </div>
                    <span class="ml-2 text-sm">
                    {{ $form->notify_by_email  ? 'Activo' : 'Inactivo' }}
                </span>
                </div>
                @error('form.notify_by_email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="type" class="form-label
                @error('type') is-invalid @enderror">
                    Tipo de interacción
                </label>
                <select class="form-select" id="type"
                        wire:model="form.type">
                    <option value="">Seleccione un tipo de interacción</option>
                    @foreach($ddl_interaction_types as $key => $ddl_interaction_type)
                        <option value="{{ $key }}">{{ $ddl_interaction_type }}</option>
                    @endforeach
                </select>
                @error('form.type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="period" class="form-label
                @error('period') is-invalid @enderror">
                    Periodo
                </label>
                <input type="text" class="form-text" id="period"
                       wire:model="form.period" placeholder="Periodo" min="0" step="0.1">
                @error('form.period')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group col-span-2">
                <label for="note" class="form-label
                @error('note') is-invalid @enderror">
                    Notas
                </label>
                <textarea class="form-text" id="note"
                          wire:model="form.note" placeholder="Notas"></textarea>
                @error('form.note')
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
                <button type="button" wire:click="cancelEdit" class="btn-secondary">
                    Cancelar
                </button>

            </div>

        </form>
    @else
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold"></h2>
            <button wire:click="$set('iscreate', '1')" class="btn-primary">
                Crear nueva interacción
            </button>
        </div>
    @endif


    <div class="">
        <table>
            <thead>
            <tr>
                <th>Acciones</th>
                <th>Cliente</th>
                <th>Servicio</th>
                <th>Costo</th>
                <th>Venta</th>
                <th>Ganancia</th>
                <th>Fecha de expiración</th>
                <th>Fecha de siguiente acción</th>
                <th>Notificado</th>
                <th>Tipo</th>
                <th>Resuelto</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($interactions as $interaction)
                <tr>
                    <td>
                        <div x-data="{ open: false }" class="relative inline-block text-left">
                            <button @click="open = !open" type="button"
                                    class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-3 py-1 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"
                                    id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Acciones
                                <svg class="-mr-1 ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 8l5 5 5-5" />
                                </svg>
                            </button>

                            <div x-show="open" @click.outside="open = false"
                                 class="origin-top-right absolute right-0 mt-2 w-44 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
                                <div class="py-1 text-sm text-gray-700">
                                    <a href="#" wire:click="editInteraction({{ $interaction->id }})" @click="open = false"
                                       class="block px-4 py-2 hover:bg-gray-100">Editar</a>

                                    <a href="#" wire:click="$dispatch('alert-send-message', {{ $interaction->id }})" @click="open = false"
                                       class="block px-4 py-2 hover:bg-gray-100">Mensajes</a>

                                    <a href="#" wire:click="renewService({{ $interaction->id }})" @click="open = false"
                                       class="block px-4 py-2 hover:bg-gray-100">Renovar</a>

                                    <hr class="my-1 border-gray-200">

                                    <a href="#" @click="$dispatch('alert-delete', {{ $interaction->id }})" @click="open = false"
                                       class="block px-4 py-2 text-red-600 hover:bg-red-100">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td>{{ $interaction->client->name }}</td>
                    <td>{{ $interaction->service->name }}</td>
                    <td>{{ $interaction->cost_price }}</td>
                    <td>{{ $interaction->selling_price }}</td>
                    <td>{{ $interaction->gross_profit }}</td>
                    <td>{{ $interaction->expiration_date }}</td>
                    <td>{{ $interaction->next_action_date }}</td>
                    <td>{{ $interaction->notified_at }}</td>
                    <td>{{ $interaction->type }}</td>
                    <td>{{ $interaction->resolved }}</td>


                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $interactions->links() }}
        </div>
    </div>
</div>
@script
<script>
    $wire.on('alert-delete', (interaction_id) => {
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
                $wire.deleteInteraction(interaction_id);
                Swal.fire(
                    'Eliminado!',
                    'El cliente ha sido eliminado.',
                    'success'
                )
            }
        })
    });

    $wire.on('alert-send-message', (interaction_id) => {
        Swal.fire({
            title: 'Selecciona el mensaje a enviar',
            input: 'select',
            inputOptions: {
                5: 'Recordatorio anticipado (5 días antes)',
                1: 'Recordatorio de vencimiento (mañana vence)',
                0: 'Último aviso (vence hoy)'
            },
            inputPlaceholder: 'Selecciona un tipo de mensaje',
            showCancelButton: true,
            confirmButtonText: 'Enviar mensaje',
            cancelButtonText: 'Cancelar',
            inputValidator: (value) => {
                if (!value) {
                    return 'Debes seleccionar un tipo de mensaje';
                }
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $wire.sendInteractionMessage(interaction_id, result.value)
                    .then(() => {
                        Swal.fire(
                            'Enviado!',
                            'El mensaje ha sido enviado al cliente.',
                            'success'
                        )
                    })
                    .catch(() => {
                        Swal.fire(
                            'Error!',
                            'Hubo un problema al enviar el mensaje.',
                            'error'
                        )
                    });
            }
        });
    });
</script>
@endscript
