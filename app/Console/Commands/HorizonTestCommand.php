<?php

namespace App\Console\Commands;

use App\Jobs\HorizonTestJob;
use Illuminate\Console\Command;

class HorizonTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'horizon-test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("Starting queues");

        HorizonTestJob::dispatch();
    }
}
