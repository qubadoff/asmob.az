<?php

namespace App\Models;

use App\Enum\ProjectStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $table = 'projects';

    protected $guarded = ['id'];

    protected $casts = [
        'status' => ProjectStatusEnum::class
    ];
}
