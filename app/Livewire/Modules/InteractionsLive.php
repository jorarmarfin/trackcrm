<?php

namespace App\Livewire\Modules;

use App\Http\Traits\InteractionsTrait;
use App\Http\Traits\DdlTrait;
use App\Http\Traits\ServicesTrait;
use App\Jobs\WhatsAppSendingJob;
use App\Livewire\Forms\InteractionForm;
use Livewire\Component;
use Livewire\WithPagination;

class InteractionsLive extends Component
{
    use DdlTrait,InteractionsTrait,WithPagination,servicesTrait;
    public InteractionForm $form;
    public int $currentServiceId = 0;

    public bool $isEdit = false;
    public bool $iscreate = false;
    public int $interaction_id;
    public function render()
    {
        return view('livewire.modules.interactions-live',[
            'interactions' => $this->getInteractions()->paginate(50),
            'ddl_clients' => $this->ddlClients(),
            'ddl_services' => $this->ddlServices(),
            'ddl_interaction_types' => $this->ddlInteractionTypes(),
        ]);
    }
    public function saveInteraction():void
    {
        if($this->isEdit){
            $this->form->update($this->getInteraction($this->interaction_id));
            $title = 'Interacción actualizada';
            $icon = 'success';
            $message = 'Interacción actualizada correctamente';
            $this->isEdit = false;
        }else{
            $this->form->store();
            $title = 'Interacción guardada';
            $icon = 'success';
            $message = 'Interacción guardada correctamente';
        }
        $this->dispatch('alert', [
            'title' => $title,
            'icon' => $icon,
            'message' => $message,
        ]);
    }
    public function showInteraction($interaction_id):void
    {
        $interaction = $this->getInteraction($interaction_id);
        $this->isEdit = false;
        $this->iscreate = false;
        $this->dispatch('alert-show-details',[
            'client' => $interaction->client->name ,
            'service' => $interaction->service ,
            'quantity' => $interaction->quantity,
            'cost_price' => $interaction->cost_price,
            'selling_price' => $interaction->selling_price,
            'gross_profit' => $interaction->gross_profit,
            'expiration_date' => $interaction->expiration_date,
            'next_action_date' => $interaction->next_action_date,
            'type' => $interaction->type,
            'period' => $interaction->period,
            'note' => $interaction->note,
        ]);
    }
    public function editInteraction($interaction_id):void
    {
        $this->form->show($this->getInteraction($interaction_id));
        $this->isEdit = true;
        $this->interaction_id = $interaction_id;
    }
    public function deleteInteraction($interaction_id):void
    {
        $this->form->delete($interaction_id);
    }
    public function cancelEdit():void
    {
        $this->form->reset();
        $this->isEdit = false;
        $this->iscreate = false;
    }
    public function renewService($interaction_id):void
    {
        $interaction = $this->getInteraction($interaction_id);
        $this->renewalInteractions($interaction);

    }
    public function updatedFormServiceId($value)
    {
        $this->currentServiceId = $value;
        $service  = $this->getService($this->currentServiceId);
        $this->calculate($service,1);
    }
    public function updatedFormQuantity($value)
    {
        $service  = $this->getService($this->currentServiceId);
        $this->calculate($service,$value);
    }
    public function calculate($service,$quantity)
    {
        $this->form->cost_price = ($service->supplier?->cost_price_to_soles ?? 0.00)*$quantity;
        $this->form->selling_price = ($service->price)*$quantity;
        $this->form->gross_profit = round($this->form->selling_price - $this->form->cost_price,2);
    }
    public function sendInteractionMessage($interaction_id,$message_id):void
    {
        $interaction = $this->getInteraction($interaction_id);
        if(!$interaction->client->phone){
            $this->dispatch('alert', [
                'title' => 'Error',
                'icon' => 'error',
                'message' => 'El cliente no tiene un número de teléfono registrado',
            ]);
            return;
        }
        WhatsAppSendingJob::dispatch(
            $interaction->id,
            $interaction->type,
            $interaction->client->name,
            $interaction->service->name,
            $interaction->expiration_date,
            $interaction->selling_price,
            $interaction->client->phone,
            (int)$message_id
        );

    }
    public function resolvedService($interaction_id):void
    {
        $this->updateInteractionFieldValue($interaction_id,['resolved' => true]);
        $this->dispatch('alert', [
            'title' => 'Interacción resuelta',
            'icon' => 'success',
            'message' => 'Interacción marcada como resuelta correctamente',
        ]);
    }


}
