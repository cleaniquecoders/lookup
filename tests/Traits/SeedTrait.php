<?php

namespace CleaniqueCoders\Lookup\Tests\Traits;

use Illuminate\Database\Eloquent\Model;

trait SeedTrait
{
    /**
     * Seed single data.
     *
     * @param  array  $datum
     * @param  string  $class  Fully Qualified Class Name, FQCN
     * @return Model
     */
    public function seedDatum($datum, $class)
    {
        return $class::create($datum);
    }

    /**
     * Seet multiple data at one time.
     *
     * @param  array  $data  List of data
     * @param  string  $class  Fully Qualified Class Name, FQCN
     */
    public function seedData($data, $class)
    {
        foreach ($data as $datum) {
            $this->seedDatum($datum, $class);
        }
    }
}
