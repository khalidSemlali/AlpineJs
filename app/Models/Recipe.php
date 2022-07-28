<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Recipe extends Model
{
    use HasFactory;
    
    protected $fillable = ['title'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);

    }

    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class)
        ->withPivot(['amount', 'unit']);
    }
}
