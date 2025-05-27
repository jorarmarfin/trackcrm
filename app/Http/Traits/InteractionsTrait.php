<?php

namespace App\Http\Traits;

use App\Http\Enum\InteractionTypeEnum;
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
    public function getNextActionDate()
    {
        return Interaction::where('type', InteractionTypeEnum::START)
            ->whereBeforeToday('next_action_date')
            ->get();
    }

}
