<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    protected $guarded = [];

    public function phone(): Attribute
    {
        return Attribute::make(
            set: fn($value) => preg_replace('/[^0-9]/', '', $value)
        );
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
    public function interactions(): HasMany
    {
        return $this->hasMany(Interaction::class);
    }
}
