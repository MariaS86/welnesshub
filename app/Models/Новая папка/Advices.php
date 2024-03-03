<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Advices extends Model
{
    //
    use HasFactory;
    protected $table = 'advices';

    public function categoryA(): BelongsTo
{
    return $this->belongsTo(CategoryA::class, 'category_id');
}
}
