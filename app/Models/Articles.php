<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articles extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "subtitle",
        "description",
        "img",
        "user_id",
        "category_id",
    ];

    public function User(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function Category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
