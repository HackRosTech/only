<?php

namespace App\Models;

use App\Filters\CategoryComfortFilter;
use App\Filters\FreeDateFilter;
use App\Filters\ModelAutomobileFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Pipeline\Pipeline;

class Automobile extends Model
{
    use HasFactory;

    protected $guarded = 'true';

    protected $fillable = [
        'id',
        'model_id',
        'category_comfort_id',
        'user_id'
    ];

    public static function filteredAutomobile()
    {
        return app(Pipeline::class)
            ->send(self::query())
            ->through([
                FreeDateFilter::class,
                CategoryComfortFilter::class,
                ModelAutomobileFilter::class
            ])
            ->thenReturn()
            ->get();
    }

    public function booking(): HasMany
    {
        return $this->hasMany(Booking::class, 'automobile_id', 'id');
    }
}
