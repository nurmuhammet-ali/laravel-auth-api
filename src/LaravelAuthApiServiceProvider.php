<?php

namespace Nurmuhammet\LaravelAuthApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Nurmuhammet\LaravelAuthApi\Commands\LaravelAuthApiCommand;

class LaravelAuthApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-auth-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-auth-api_table')
            ->hasCommand(LaravelAuthApiCommand::class);
    }
}
