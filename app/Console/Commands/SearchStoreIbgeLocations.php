<?php

namespace App\Console\Commands;

use App\Events\IbgeLocationsProcessed;
use Illuminate\Console\Command;

class SearchStoreIbgeLocations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:search-store-ibge-locations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Search and store ibge locations';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        IbgeLocationsProcessed::dispatch();
    }
}
