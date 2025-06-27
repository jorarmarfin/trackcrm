<?php

namespace App\Livewire\Forms;

use App\Models\Interaction;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InteractionForm extends Form
{
    #[Validate('required')]
    public int $client_id = 0;

    #[Validate('required')]
    public int $service_id = 0;
    public int $quantity = 0;
    public float $cost_price = 0.00;
    public float $selling_price = 0.00;
    public float $gross_profit = 0.00;

    #[Validate('required|date')]
    public ?string $expiration_date = null;
    public ?string $next_action_date = null;
    public ?string $notified_at = null;
    #[Validate('required')]
    public bool $notify_by_whatsapp = true;
    #[Validate('required')]
    public bool $notify_by_email = true;
    #[Validate('required')]
    public string $type = 'start'; // expiración, cobro, renovación, recordatorio, agradecimiento, nota

    #[Validate('required')]
    public string $period = 'monthly'; // monthly, quarterly, yearly

    public ?string $note = '';

    public array $fields = [
        'client_id',
        'service_id',
        'quantity',
        'cost_price',
        'selling_price',
        'gross_profit',
        'expiration_date',
        'next_action_date',
        'notified_at',
        'notify_by_whatsapp',
        'notify_by_email',
        'type',
        'period',
        'note'
    ];

    public function store()
    {
        $this->validate();
        Interaction::create(
            $this->only($this->fields)
        );
        $this->reset();
    }
    public function show(Interaction $interaction): void
    {
        $this->fill([
            'client_id' => $interaction->client_id,
            'service_id' => $interaction->service_id,
            'quantity' => $interaction->quantity,
            'cost_price' => $interaction->cost_price,
            'selling_price' => $interaction->selling_price,
            'gross_profit' => $interaction->gross_profit,
            'expiration_date' => $interaction->expiration_date,
            'next_action_date' => $interaction->next_action_date,
            'notified_at' => $interaction->notified_at,
            'notify_by_whatsapp' => $interaction->notify_by_whatsapp,
            'notify_by_email' => $interaction->notify_by_email,
            'type' => $interaction->type,
            'period' => $interaction->period,
            'note' => $interaction->note
        ]);
    }
    public function update(Interaction $interaction): void
    {
        $this->validate();

        $interaction->update(
            $this->only($this->fields)
        );
        $this->reset();
    }
    public function delete($interaction_id): void
    {
        $interaction = Interaction::find($interaction_id);
        $interaction->delete();
    }
}
