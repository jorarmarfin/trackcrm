<?php

namespace App\Http\Traits;

use App\Models\Interaction;

trait InteractionsTrait
{
    public function getInteractions()
    {
        return Interaction::query();
    }
    public function getInteraction($interaction_id)
    {
        return Interaction::find($interaction_id);
    }

}
