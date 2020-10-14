<?php

namespace CleaniqueCoders\Lookup;

/*
 * This file is part of lookup
 *
 * @license MIT
 * @package lookup
 */

use Illuminate\Support\Facades\Facade;

class LookupFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Lookup';
    }
}
