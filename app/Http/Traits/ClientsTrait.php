<?php

namespace App\Http\Traits;

use App\Models\Client;

trait ClientsTrait
{
    public function getClients()
    {
        return Client::query();
    }
    public function getClient($client_id)
    {
        return Client::find($client_id);
    }

}
