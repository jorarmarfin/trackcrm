<?php

namespace App\Livewire\Forms;

use App\Models\Client;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ClientForm extends Form
{
    #[Validate('required')]
    public string $name = '';
    #[Validate('required')]
    public string $document_type = '';
    #[Validate('required')]
    public string $document_number = '';
    #[Validate('required')]
    public string $phone = '';
    #[Validate('required')]
    public string $email = '';
    #[Validate('required')]
    public string $address = '';

    public string $notes = '';
    #[Validate('required')]
    public string $status = 'activo'; // true = activo

    public array $fields = [
        'name',
        'document_type',
        'document_number',
        'phone',
        'email',
        'address',
        'status',
        'notes',
    ];

    public function store()
    {
        $this->validate();

        Client::create(
            $this->only($this->fields)
        );
        $this->reset();
    }
    public function show(Client $client): void
    {
        $this->fill([
            'name' => $client->name,
            'document_type' => $client->document_type,
            'document_number' => $client->document_number,
            'phone' => $client->phone,
            'email' => $client->email,
            'address' => $client->address,
            'status' => $client->status,
            'notes' => $client->notes,
        ]);
    }
    public function update(Client $client): void
    {
        $this->validate();
        $client->update(
            $this->only($this->fields)
        );
        $this->reset();
    }
    public function delete($client_id): void
    {
        $client = Client::find($client_id);
        $client->delete();
    }
}
