<?php

use App\Enum\NewsStatusEnum;
use App\Enum\ProjectStatusEnum;
use App\Models\News;
use App\Models\Partner;
use App\Models\Project;
use App\Models\ProjectCategory;
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

if (!function_exists('projects'))
{
    function projects(): Collection
    {
        return Project::query()->where('status', ProjectStatusEnum::ACTIVE)->get();
    }
}

if (!function_exists('category'))
{
    function category(): Collection
    {
        return ProjectCategory::all();
    }
}

if (!function_exists('partner'))
{
    function partner(): Collection
    {
        return Partner::all();
    }
}



