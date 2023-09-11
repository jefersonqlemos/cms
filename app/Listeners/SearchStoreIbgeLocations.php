<?php

namespace App\Listeners;

use App\Events\IbgeLocationsProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Services\SearchStoreIbgeLocationsService;

class SearchStoreIbgeLocations
{

    private $serchStoreIbgeLocationsService;

    /**
     * Create the event listener.
     */
    public function __construct(SearchStoreIbgeLocationsService $serchStoreIbgeLocationsService)
    {
        //
        $this->serchStoreIbgeLocationsService = $serchStoreIbgeLocationsService;
    }

    /**
     * Handle the event.
     */
    public function handle(IbgeLocationsProcessed $event): void
    {
        // 
        $this->serchStoreIbgeLocationsService->searchStoreStates();
    }
}
