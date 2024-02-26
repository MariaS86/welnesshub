<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// class Users extends Model
// {
//     use HasFactory;

//     public function users(): BelongsTo
// {
//     return $this->belongsTo(Users::class);
// }
// public function products(): BelongsToMany
// {
//     return $this->belongsToMany(Products::class,'consumes');
// }
// }
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Users extends Model
{
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Products::class, 'consumes')
        ->withPivot('weight');
    }
}