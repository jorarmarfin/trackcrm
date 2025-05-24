<?php

namespace App\Http\Traits;

use App\Models\Supplier;

trait SuppliersTrait
{
    public function getSuppliers()
    {
        return Supplier::query();
    }
    public function getSupplier($supplier_id)
    {
        return Supplier::find($supplier_id);
    }

}
