<?php

return [
    'model'          => \CleaniqueCoders\Lookup\Models\Lookup::class,
    'metadata'       => \CleaniqueCoders\Lookup\Models\Metada::class,
    'cache_duration' => 60,
    'seeder_path'	 => base_path('/database/schemas/lookup.sql'),
];
