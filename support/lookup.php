<?php

use Illuminate\Support\Facades\Cache;

if (! function_exists('lookup')) {
    function lookup($key)
    {
        return Cache::remember(
            'lookup-'.$key, config('lookup.cache_duration'),
            function () use ($key) {
                return config('lookup.model')::query()
                    ->where('key', $key)
                    ->get(['key', 'value', 'meta', 'description', 'order_by']);
            });
    }
}
