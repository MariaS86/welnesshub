<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    //
    use HasFactory;

    public function categoryp(): BelongsToMany
{
    return $this->belongsToMany(CategoryP::class);
}
// public function users(): BelongsToMany
// {
//     return $this->belongsToMany(Users::class,'consumes');
// }
}
