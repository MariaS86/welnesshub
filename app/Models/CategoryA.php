<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryA extends Model
{
    use HasFactory;
    protected $table = 'categories_a';
    public function advices(): HasMany
    {
        // return $this->hasMany(Advices::class);
        return $this->hasMany(Advices::class, 'category_id', 'id');
    }
}
