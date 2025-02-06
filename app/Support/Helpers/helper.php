<?php

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
