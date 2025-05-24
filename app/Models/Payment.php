<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $guarded = [];

    public function interaction():BelongsTo
    {
        return $this->belongsTo(Interaction::class);
    }
}
