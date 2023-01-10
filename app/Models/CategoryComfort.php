<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryComfort extends Model
{
    use HasFactory;

    protected $table = 'categories_comfort';

    protected $fillable = [
        'id',
        'title'
    ];
}
