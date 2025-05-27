<?php

namespace App\Livewire\Modules;

use App\Http\Traits\InteractionsTrait;
use App\Http\Traits\DdlTrait;
use App\Http\Traits\ServicesTrait;
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


}
