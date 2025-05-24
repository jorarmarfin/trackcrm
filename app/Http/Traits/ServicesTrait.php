<?php

namespace App\Http\Traits;

use App\Models\Service;

trait ServicesTrait
{
    public function getServices()
    {
        return Service::query();
    }
    public function getService($service_id)
    {
        return Service::find($service_id);
    }

}
