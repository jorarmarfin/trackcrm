<?php

namespace App\Livewire\Forms;

use App\Models\Supplier;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SupplierForm extends Form
{
    #[Validate('required')]
    public string $name = '';
    #[Validate('required')]
    public string $contact_name = '';
    #[Validate('required')]
    public string $phone = '';
    #[Validate('required')]
    public string $email = '';
    #[Validate('required')]
    public string $website = '';
    #[Validate('required')]
    public string $currency = 'Soles'; // true = activo
    #[Validate('required')]
    public float $cost_price = 0.0;
    #[Validate('required')]
    public string $notes = '';

    public array $fields = ['name', 'contact_name', 'phone', 'email', 'website','currency', 'cost_price','notes'];

    public function store()
    {
        $this->validate();

        Supplier::create(
            $this->only($this->fields)
        );
        $this->reset();
    }
    public function show(Supplier $supplier): void
    {
        $this->fill([
            'name' => $supplier->name,
            'contact_name' => $supplier->contact_name,
            'phone' => $supplier->phone,
            'email' => $supplier->email,
            'website' => $supplier->website,
            'currency' => $supplier->currency,
            'cost_price' => $supplier->cost_price,
            'notes' => $supplier->notes,
        ]);
    }
    public function update(Supplier $supplier): void
    {
        $this->validate();

        $supplier->update(
            $this->only($this->fields)
        );
        $this->reset();
    }
    public function delete($service_id): void
    {
        $supplier = Supplier::find($service_id);
        $supplier->delete();
    }
}
