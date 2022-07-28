<?php

namespace App\Models;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    public function recipes(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class)
        ->withPivot(['amount', 'unit']);
    }
}
