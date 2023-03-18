<?php

namespace Nanopkg\DigitaloceanSpaceAdapter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Nanopkg\DigitaloceanSpaceAdapter\Commands\DigitaloceanSpaceAdapterCommand;

class DigitaloceanSpaceAdapterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-digitalocean-space-adapter')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-digitalocean-space-adapter_table')
            ->hasCommand(DigitaloceanSpaceAdapterCommand::class);
    }
}
