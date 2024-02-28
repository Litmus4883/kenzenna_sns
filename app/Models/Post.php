<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    
    # fillメソッドを使う時の許可
    protected $fillable = ['body'];
    
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
    
    # 1対多（逆）の定義
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    # 多対多の定義
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
