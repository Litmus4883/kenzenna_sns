<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    
    # 1対多の定義
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
    # 1対多の定義
    public function replies(): HasMany
    {
        return $this->hasMany(Reply::class);
    }
    
    # 多対多の定義
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
