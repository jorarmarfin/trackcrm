<?php

namespace App\Http\Traits;

use App\Http\Enum\InteractionTypeEnum;
use App\Models\Client;
use App\Models\Service;

trait DdlTrait
{
    public function ddlClients()
    {
        return $this->getDdl(Client::class, 'id', 'name');
    }
    public function ddlServices()
    {
        return $this->getDdl(Service::class, 'id', 'name');
    }
    public function ddlDocumentTypes():array
    {
        return ['DNI', 'RUC', 'OTROS'];
    }
    public function ddlInteractionTypes():array
    {
        return collect(InteractionTypeEnum::cases())
            ->mapWithKeys(fn($case) => [$case->value => $case->label()])
            ->toArray();
    }
    public function ddlStatusClient():array
    {
        return [
            'Activo',
            'Inactivo',
            'Suspendido',
        ];
    }
    public function getDdl($model, $key = 'id', $value = 'code')
    {
        return $model::query()->pluck($value, $key);
    }

    public function getDdlWithCondition($model, $condition, $key = 'id', $value = 'name')
    {
        return $model::query()->where($condition)->pluck($value, $key);
    }

}
