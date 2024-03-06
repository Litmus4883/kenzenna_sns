<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'image_path',
        'post_id',
    ];
    
    # 1対多（逆）の定義
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
