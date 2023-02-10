<?php

namespace CleaniqueCoders\Lookup\Models;

use Illuminate\Database\Eloquent\Model;

class Lookup extends Model
{
    protected $casts = [
        'meta' => 'array',
    ];
}
