<?php

namespace Nurmuhammet\LaravelAuthApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nurmuhammet\LaravelAuthApi\LaravelAuthApi
 */
class LaravelAuthApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nurmuhammet\LaravelAuthApi\LaravelAuthApi::class;
    }
}
