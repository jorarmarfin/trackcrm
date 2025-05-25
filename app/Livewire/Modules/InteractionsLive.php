<?php

namespace App\Livewire\Modules;

use App\Http\Traits\InteractionsTrait;
use App\Http\Traits\DdlTrait;
use App\Livewire\Forms\InteractionForm;
use Livewire\Component;
use Livewire\WithPagination;

class InteractionsLive extends Component
{
    use DdlTrait,InteractionsTrait,WithPagination;
    public InteractionForm $form;

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
}
