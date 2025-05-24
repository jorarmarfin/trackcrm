<?php

namespace App\Livewire\Modules;

use App\Http\Traits\SuppliersTrait;
use App\Livewire\Forms\SupplierForm;
use Livewire\Component;
use Livewire\WithPagination;

class SuppliersLive extends Component
{
    use SuppliersTrait, WithPagination;
    public SupplierForm $form;
    public bool $isEdit = false;
    public int $supplier_id;
    public function render()
    {
        return view('livewire.modules.suppliers-live',[
            'suppliers' => $this->getSuppliers()->paginate(50),
        ]);
    }
    public function saveSupplier():void
    {
        if($this->isEdit){
            $this->form->update($this->getSupplier($this->supplier_id));
            $title = 'Proveedor actualizado';
            $icon = 'success';
            $message = 'Proveedor actualizado correctamente';
            $this->isEdit = false;
        }else{
            $this->form->store();
            $title = 'Proveedor guardado';
            $icon = 'success';
            $message = 'Proveedor guardado correctamente';
        }
        $this->dispatch('alert', [
            'title' => $title,
            'icon' => $icon,
            'message' => $message,
        ]);
    }
    public function editSupplier($supplier_id):void
    {
        $this->form->show($this->getSupplier($supplier_id));
        $this->isEdit = true;
        $this->supplier_id = $supplier_id;
    }
    public function deleteSupplier($supplier_id):void
    {
        $this->form->delete($supplier_id);
    }
    public function cancelSupplier():void
    {
        $this->form->reset();
        $this->isEdit = false;
    }
}
