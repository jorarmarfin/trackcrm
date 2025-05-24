<?php

namespace App\Livewire\Modules;

use App\Http\Traits\ServicesTrait;
use App\Livewire\Forms\ServiceForm;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesLive extends Component
{
    use ServicesTrait, WithPagination;
    public ServiceForm $form;
    public bool $isEdit = false;
    public int $supplier_id;
    public function render()
    {
        return view('livewire.modules.services-live',[
            'services' => $this->getServices()->paginate(50),
        ]);
    }
    public function saveService():void
    {
        if($this->isEdit){
            $this->form->update($this->getService($this->supplier_id));
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
    public function editService($supplier_id):void
    {
        $this->form->show($this->getService($supplier_id));
        $this->isEdit = true;
        $this->supplier_id = $supplier_id;
    }
    public function deleteService($supplier_id):void
    {
        $this->form->delete($supplier_id);
    }
}
