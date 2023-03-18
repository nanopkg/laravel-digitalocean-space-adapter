<?php

namespace Nanopkg\DigitaloceanSpaceAdapter\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Nanopkg\DigitaloceanSpaceAdapter\DigitaloceanSpaceAdapterServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Nanopkg\\DigitaloceanSpaceAdapter\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            DigitaloceanSpaceAdapterServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-digitalocean-space-adapter_table.php.stub';
        $migration->up();
        */
    }
}
