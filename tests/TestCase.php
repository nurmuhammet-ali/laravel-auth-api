<?php

namespace Nurmuhammet\LaravelAuthApi\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nurmuhammet\LaravelAuthApi\LaravelAuthApiServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Nurmuhammet\\LaravelAuthApi\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelAuthApiServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-auth-api_table.php.stub';
        $migration->up();
        */
    }
}
