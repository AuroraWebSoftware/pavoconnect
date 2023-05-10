<?php

namespace aurorawebsoftware\Pavoconnect\Commands;

use Illuminate\Console\Command;

class PavoconnectCommand extends Command
{
    public $signature = 'pavoconnect';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
