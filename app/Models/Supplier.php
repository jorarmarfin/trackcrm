<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $guarded = [];
    public $timestamps = false;


    protected function details(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->name.' - '.$this->currency. ' ' . $this->cost_price,
        );
    }
    protected function costPriceToSoles(): Attribute
    {
        $tc = Setting::where('key', $this->currency)->first()->value ?? 1; // Default to 1 if not found
        return Attribute::make(
            get: fn () => round($this->cost_price * $tc, 2),
        );
    }
}
