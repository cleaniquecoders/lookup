<?php

use CleaniqueCoders\Lookup\Models\Lookup;

return [
    'model' => Lookup::class,
    'cache_duration' => env('LOOKUP_CACHE_DURATION', 60),
    'seeder' => base_path('app/lookup.json'),
];
