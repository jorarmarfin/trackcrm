<?php

namespace App\Livewire\Forms;

use App\Models\Setting;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SettingForm extends Form
{
    #[Validate('required')]
    public string $key = '';
    #[Validate('required')]
    public string $value = '';

    public array $fields = [
        'key',
        'value',
    ];

    public function store()
    {
        $this->validate();

        Setting::create(
            $this->only($this->fields)
        );
        $this->reset();
    }
    public function show(Setting $client): void
    {
        $this->fill([
            'key' => $client->key,
            'value' => $client->value
        ]);
    }
    public function update(Setting $client): void
    {
        $this->validate();

        $client->update(
            $this->only($this->fields)
        );
        $this->reset();
    }
    public function delete($setting_id): void
    {
        $client = Setting::find($setting_id);
        $client->delete();
    }
}
