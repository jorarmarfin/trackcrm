<?php

namespace App\Http\Traits;

trait DdlTrait
{
    public function ddlDocumentTypes():array
    {
        return ['DNI', 'RUC', 'OTROS'];
    }
    public function ddlStatusClient():array
    {
        return [
            'Activo',
            'Inactivo',
            'Suspendido',
        ];
    }

}
