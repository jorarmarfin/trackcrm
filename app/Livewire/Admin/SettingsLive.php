<?php

namespace App\Livewire\Admin;

use App\Http\Traits\SettingsTrait;
use App\Http\Traits\DdlTrait;
use App\Livewire\Forms\SettingForm;
use Livewire\Component;
use Livewire\WithPagination;

class SettingsLive extends Component
{
    use DdlTrait,SettingsTrait,WithPagination;
    public SettingForm $form;
    public bool $isEdit = false;
    public int $setting_id;
    public function render()
    {
        return view('livewire.admin.settings-live',[
            'settings' => $this->getSettings()->paginate(50),
        ]);
    }
    public function saveSetting():void
    {
        if($this->isEdit){
            $this->form->update($this->getSetting($this->setting_id));
            $title = 'Configuración actualizada';
            $icon = 'success';
            $message = 'Configuración actualizada correctamente';
            $this->isEdit = false;
        }else{
            $this->form->store();
            $title = 'Configuración guardada';
            $icon = 'success';
            $message = 'Configuración guardada correctamente';
        }
        $this->dispatch('alert', [
            'title' => $title,
            'icon' => $icon,
            'message' => $message,
        ]);
    }
    public function editSetting($setting_id):void
    {
        $this->form->show($this->getSetting($setting_id));
        $this->isEdit = true;
        $this->setting_id = $setting_id;
    }
    public function deleteSetting($setting_id):void
    {
        $this->form->delete($setting_id);
    }
    public function resetForm():void
    {
        $this->form->reset();
        $this->isEdit = false;
    }
}
