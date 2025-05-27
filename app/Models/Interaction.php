<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Interaction extends Model
{
    protected $guarded = [];


    public function Resolved():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? 'Sí' : 'No',
        );
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
    public function payment(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
