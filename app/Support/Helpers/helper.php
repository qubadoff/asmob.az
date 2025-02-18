<?php

use App\Enum\NewsStatusEnum;
use App\Models\News;
use App\Models\Project;
use App\Models\SiteSetting;
use App\Models\Slider;
use Illuminate\Database\Eloquent\Collection;

if (!function_exists('siteSetting'))
{
    function siteSetting(): SiteSetting
    {
        return SiteSetting::query()->where('id', 1)->first();
    }
}

if (!function_exists('slider'))
{
    function slider(): Collection
    {
        return Slider::all();
    }
}

if (!function_exists('news'))
{
    function news(): Collection
    {
        return News::query()->where('status', NewsStatusEnum::PUBLISHED->value)->orderBy('created_at', 'desc')->limit(3)->get();
    }
}

if (!function_exists('projects')) {
    function projects(): Collection
    {
        return Project::with('category')->get()->groupBy('category.name');
    }
}



