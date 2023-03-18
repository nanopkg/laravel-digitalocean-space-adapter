<?php

namespace Nanopkg\DigitaloceanSpaceAdapter\Commands;

use Illuminate\Console\Command;

class DigitaloceanSpaceAdapterCommand extends Command
{
    public $signature = 'laravel-digitalocean-space-adapter';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
