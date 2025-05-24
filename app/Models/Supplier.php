<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Supplier extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }
}
