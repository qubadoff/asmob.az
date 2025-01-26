<?php

namespace App\Models;

use App\Enum\ProjectStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $table = 'projects';

    protected $guarded = ['id'];

    protected $casts = [
        'images' => 'array',
        'videos' => 'array',
        'status' => ProjectStatusEnum::class
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProjectCategory::class);
    }

    public function otherCategory(): BelongsTo
    {
        return $this->belongsTo(OtherCategory::class);
    }
}
