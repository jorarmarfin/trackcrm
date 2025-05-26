<?php

namespace App\Http\Traits;

use App\Http\Enum\InteractionTypeEnum;
use App\Models\Client;
use App\Models\Service;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

trait DdlTrait
{
    public function ddlClients()
    {
        return $this->getDdl(Client::class, 'id', 'name');
    }
    public function ddlServices()
    {
        return $this->getDdl(Service::class, 'id', DB::raw("CONCAT(name, ' | ', price) as name"));
    }
    public function ddlSuppliers()
    {
        return $this->getDdl(Supplier::class, 'id', DB::raw("CONCAT(name, ' | ', cost_price,' | ',notes) as name"));
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
