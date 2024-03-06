<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    # fillメソッドを使う時の許可
    protected $fillable = [
        'body',
        'user_id',
    ];
    
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
    
    # 取得件数の制限
    public function getByLimit(int $limit_count = 4)
    {
        return $this->orderBy('updated_at', 'desc')->limit($limit_count)->get();
    }
    
    # ペジネーション
    public function getPaginateByLimit(int $limit_count = 4)
    {
        return $this->orderBy('updated_at', 'desc')->paginate($limit_count);
    }
}
