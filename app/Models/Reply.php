<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reply extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'body',
        'user_id',
        'post_id',
    ];
    
    # 1対多（逆）の定義
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
    # 1対多（逆）の定義
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
