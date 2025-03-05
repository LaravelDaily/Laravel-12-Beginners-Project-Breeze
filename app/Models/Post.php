<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = ['title', 'text', 'category_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
