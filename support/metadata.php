<?php

use Illuminate\Support\Facades\Cache;

if (! function_exists('metadata')) {
    function metadata($name)
    {
        return Cache::remember('metadata-' . $name, config('lookup.cache_duration'), function () {
            return config('lookup.model')::whereName($name)->get();
        });
    }
}
