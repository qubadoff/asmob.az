<?php

namespace App\Models;

use App\Enum\NewsStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    protected $table = 'news';

    protected $guarded = ['id'];

    protected $casts = [
        'status' => NewsStatusEnum::class
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(NewsCategory::class);
    }
}
