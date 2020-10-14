<?php 

use Illuminate\Support\Facades\Cache;

if(! function_exists('metadata'))
{
	function metadata($key)
	{
		return Cache::remember('metadata-' . $key, config('lookup.cache_duration'), function () {
		    return config('lookup.model')::whereKey($key)->get();
		});
	}
}