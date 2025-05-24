<?php

namespace App\Livewire\Forms;

use App\Models\Service;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ServiceForm extends Form
{
    #[Validate('required')]
    public string $name = '';
    #[Validate('required')]
    public string $description = '';
    #[Validate('required')]
    public float $price = 0.0;


    public array $fields = ['name', 'description', 'price'];

    public function store()
    {
        $this->validate();

        Service::create(
            $this->only($this->fields)
        );
        $this->reset();
    }
    public function show(Service $service): void
    {
        $this->fill([
            'name' => $service->name,
            'description' => $service->description,
            'price' => $service->price,
        ]);
    }
    public function update(Service $service): void
    {
        $this->validate();

        $service->update(
            $this->only($this->fields)
        );
        $this->reset();
    }
    public function delete($service_id): void
    {
        $service = Service::find($service_id);
        $service->delete();
    }
}
