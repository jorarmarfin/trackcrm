<?php

namespace App\Http\Traits;

use App\Http\Enum\InteractionTypeEnum;
use App\Models\Interaction;

trait InteractionsTrait
{
    public function getInteractions()
    {
        return Interaction::orderBy('id','desc');
    }
    public function getInteraction($interaction_id)
    {
        return Interaction::find($interaction_id);
    }
    public function getNextActionDate()
    {
        return Interaction::whereDate('next_action_date',now())
            ->where('resolved', false)
            ->get();
    }
    public function renewalInteractions($originalInteraction):void
    {
        $newInteraction = new Interaction();
        $newInteraction->client_id = $originalInteraction->client_id;
        $newInteraction->service_id = $originalInteraction->service_id;
        $newInteraction->quantity = $originalInteraction->quantity;
        $newInteraction->cost_price = $originalInteraction->cost_price;
        $newInteraction->selling_price = $originalInteraction->selling_price;
        $newInteraction->gross_profit = $originalInteraction->gross_profit;
        $newInteraction->type = InteractionTypeEnum::RENEWAL;
        $newInteraction->notify_by_whatsapp = $originalInteraction->notify_by_whatsapp;
        $newInteraction->notify_by_email = $originalInteraction->notify_by_email;
        $newInteraction->expiration_date = now()->addDays(30);
        $newInteraction->next_action_date = now()->addDays(25);
        $newInteraction->save();

        $originalInteraction->resolved = true;
        $originalInteraction->save();

    }
    public function updateInteractionFieldValue($id,$array):void
    {
        Interaction::where('id',$id)->update($array);
    }
    public function getInteractionsToBeCompleted()
    {
        return Interaction::where('resolved', false)
            ->orderBy('next_action_date', 'asc')
            ->take(5)
            ->get();
    }

}
