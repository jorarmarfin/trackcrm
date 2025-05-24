<?php

namespace App\Livewire\Modules;

use App\Http\Traits\ClientsTrait;
use App\Http\Traits\DdlTrait;
use App\Livewire\Forms\ClientForm;
use Livewire\Component;
use Livewire\WithPagination;

class ClientsLive extends Component
{
    use DdlTrait,ClientsTrait,WithPagination;
    public ClientForm $form;
    public bool $isEdit = false;
    public int $client_id;
    public function render()
    {
        return view('livewire.modules.clients-live',[
            'clients' => $this->getClients()->paginate(50),
            'status_clients' => $this->ddlStatusClient(),
            'document_types' => $this->ddlDocumentTypes(),
        ]);
    }
    public function saveClient():void
    {
        if($this->isEdit){
            $this->form->update($this->getClient($this->client_id));
            $title = 'Categoría actualizada';
            $icon = 'success';
            $message = 'Categoría actualizada correctamente';
            $this->isEdit = false;
        }else{
            $this->form->store();
            $title = 'Categoría guardada';
            $icon = 'success';
            $message = 'Categoría guardada correctamente';
        }
        $this->dispatch('alert', [
            'title' => $title,
            'icon' => $icon,
            'message' => $message,
        ]);
    }
    public function editClient($client_id):void
    {
        $this->form->show($this->getClient($client_id));
        $this->isEdit = true;
        $this->client_id = $client_id;
    }
    public function deleteClient($client_id):void
    {
        $this->form->delete($client_id);
    }
}
