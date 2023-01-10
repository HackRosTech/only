<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAutomobile extends Model
{
    use HasFactory;

    protected $table = 'models_automobile';
    protected $guarded = 'true';
}
