<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Advices extends Model
{
    //
 
    protected $fillable = ['name', 'text', 'category_id'];

    use HasFactory;
    protected $table = 'advices';

    public function categoryA(): BelongsTo
{
    return $this->belongsTo(CategoryA::class, 'category_id');
}
// public function advices(): HasMany
// {
//     return $this->hasMany(Advices::class, 'category_id');
// }
}
