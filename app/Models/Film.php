<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Film extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'year',
        'category_id',
    ];
        public function categories():BelongsToMany
        {
            return $this->belongsToMany(Category::class);
    }
}
