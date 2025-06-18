<?php

namespace App\Livewire\Dashboard;

use App\Http\Traits\InteractionsTrait;
use Livewire\Component;

class ServicesToBeCompleted extends Component
{
    use InteractionsTrait;
    public function render()
    {
        return view('livewire.dashboard.services-to-be-completed',[
            'interactions' => $this->getInteractionsToBeCompleted(),
        ]);
    }
}
