<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    public function automobile(): BelongsTo
    {
        return $this->belongsTo(Automobile::class,'automobile_id', 'id');
    }
}
