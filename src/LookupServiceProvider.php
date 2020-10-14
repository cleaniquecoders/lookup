<?php

namespace CleaniqueCoders\Lookup;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class LookupServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(Filesystem $filesystem)
    {
        $this->publishes([
            __DIR__ . '/../config/lookup.php' => config_path('lookup.php'),
        ], 'lookup-config');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_metadata_table.php.stub' => $this->getMigrationFileName($filesystem, 'create_metadata_table'),
            __DIR__ . '/../database/migrations/create_lookups_table.php.stub'  => $this->getMigrationFileName($filesystem, 'create_lookups_table'),
        ], 'lookup-migrations');

        $this->publishes([
            __DIR__ . '/../database/seeders/LookupSeeder.php.stub' => $this->app->databasePath() . '/seeders/LookupSeeder.php',
        ], 'lookup-seeder');

        $this->publishes([
            __DIR__ . '/../database/schemas/lookup.sql' => $this->app->databasePath() . '/schemas/lookup.sql',
        ], 'lookup-schemas');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }

    /**
     * Returns existing migration file if found, else uses the current timestamp.
     */
    protected function getMigrationFileName(Filesystem $filesystem, string $file): string
    {
        $timestamp = date('Y_m_d_His');

        return Collection::make($this->app->databasePath() . DIRECTORY_SEPARATOR . 'migrations' . DIRECTORY_SEPARATOR)
            ->flatMap(function ($path) use ($filesystem, $file) {
                return $filesystem->glob($path . '*_' . $file . '.php');
            })->push($this->app->databasePath() . "/migrations/{$timestamp}_{$file}.php")
            ->first();
    }
}
