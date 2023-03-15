<?php

namespace Nurmuhammet\LaravelAuthApi\Commands;

use Illuminate\Console\Command;

class LaravelAuthApiCommand extends Command
{
    public $signature = 'laravel-auth-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
