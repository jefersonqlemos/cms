<?php

namespace App\Services;

use App\Models\City;
use App\Models\State;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Console\Output\ConsoleOutput;

class SearchStoreIbgeLocationsService 
{

    public function searchStoreStates()
    {
        $response = Http::get('https://servicodados.ibge.gov.br/api/v1/localidades/estados');

        foreach($response->object() as $state)
        {
            $createdState = State::create([
                'name' => $state->nome,
                'abbreviation' => $state->sigla,
                'ibge_id' => $state->id
            ]);

            $output = new ConsoleOutput();
            $output->writeln("Estate <comment>$state->nome</comment> OK");

            $this->searchStoreCities($state->id, $createdState->id);
        }

    }

    public function searchStoreCities($state_ibge_id, $state_id)
    {
        $response = Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/estados/$state_ibge_id/municipios");

        foreach($response->object() as $city)
        {
            City::create([
                'name' => $city->nome,
                'ibge_id' => $city->id,
                'state_id' => $state_id
            ]);

            $output = new ConsoleOutput();
            $output->writeln("City <info>$city->nome</info> OK");
        }
    }

} 



