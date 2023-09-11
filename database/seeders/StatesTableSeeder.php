<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Rondônia',
                'abbreviation' => 'RO',
                'ibge_id' => 11,
                'created_at' => '2023-09-11 00:38:26',
                'updated_at' => '2023-09-11 00:38:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Acre',
                'abbreviation' => 'AC',
                'ibge_id' => 12,
                'created_at' => '2023-09-11 00:38:26',
                'updated_at' => '2023-09-11 00:38:26',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Amazonas',
                'abbreviation' => 'AM',
                'ibge_id' => 13,
                'created_at' => '2023-09-11 00:38:26',
                'updated_at' => '2023-09-11 00:38:26',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Roraima',
                'abbreviation' => 'RR',
                'ibge_id' => 14,
                'created_at' => '2023-09-11 00:38:27',
                'updated_at' => '2023-09-11 00:38:27',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Pará',
                'abbreviation' => 'PA',
                'ibge_id' => 15,
                'created_at' => '2023-09-11 00:38:27',
                'updated_at' => '2023-09-11 00:38:27',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Amapá',
                'abbreviation' => 'AP',
                'ibge_id' => 16,
                'created_at' => '2023-09-11 00:38:27',
                'updated_at' => '2023-09-11 00:38:27',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Tocantins',
                'abbreviation' => 'TO',
                'ibge_id' => 17,
                'created_at' => '2023-09-11 00:38:28',
                'updated_at' => '2023-09-11 00:38:28',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Maranhão',
                'abbreviation' => 'MA',
                'ibge_id' => 21,
                'created_at' => '2023-09-11 00:38:28',
                'updated_at' => '2023-09-11 00:38:28',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Piauí',
                'abbreviation' => 'PI',
                'ibge_id' => 22,
                'created_at' => '2023-09-11 00:38:29',
                'updated_at' => '2023-09-11 00:38:29',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Ceará',
                'abbreviation' => 'CE',
                'ibge_id' => 23,
                'created_at' => '2023-09-11 00:38:29',
                'updated_at' => '2023-09-11 00:38:29',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Rio Grande do Norte',
                'abbreviation' => 'RN',
                'ibge_id' => 24,
                'created_at' => '2023-09-11 00:38:30',
                'updated_at' => '2023-09-11 00:38:30',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Paraíba',
                'abbreviation' => 'PB',
                'ibge_id' => 25,
                'created_at' => '2023-09-11 00:38:31',
                'updated_at' => '2023-09-11 00:38:31',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Pernambuco',
                'abbreviation' => 'PE',
                'ibge_id' => 26,
                'created_at' => '2023-09-11 00:38:31',
                'updated_at' => '2023-09-11 00:38:31',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Alagoas',
                'abbreviation' => 'AL',
                'ibge_id' => 27,
                'created_at' => '2023-09-11 00:38:32',
                'updated_at' => '2023-09-11 00:38:32',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Sergipe',
                'abbreviation' => 'SE',
                'ibge_id' => 28,
                'created_at' => '2023-09-11 00:38:33',
                'updated_at' => '2023-09-11 00:38:33',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Bahia',
                'abbreviation' => 'BA',
                'ibge_id' => 29,
                'created_at' => '2023-09-11 00:38:34',
                'updated_at' => '2023-09-11 00:38:34',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Minas Gerais',
                'abbreviation' => 'MG',
                'ibge_id' => 31,
                'created_at' => '2023-09-11 00:38:35',
                'updated_at' => '2023-09-11 00:38:35',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Espírito Santo',
                'abbreviation' => 'ES',
                'ibge_id' => 32,
                'created_at' => '2023-09-11 00:38:36',
                'updated_at' => '2023-09-11 00:38:36',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Rio de Janeiro',
                'abbreviation' => 'RJ',
                'ibge_id' => 33,
                'created_at' => '2023-09-11 00:38:36',
                'updated_at' => '2023-09-11 00:38:36',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'São Paulo',
                'abbreviation' => 'SP',
                'ibge_id' => 35,
                'created_at' => '2023-09-11 00:38:37',
                'updated_at' => '2023-09-11 00:38:37',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Paraná',
                'abbreviation' => 'PR',
                'ibge_id' => 41,
                'created_at' => '2023-09-11 00:38:38',
                'updated_at' => '2023-09-11 00:38:38',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Santa Catarina',
                'abbreviation' => 'SC',
                'ibge_id' => 42,
                'created_at' => '2023-09-11 00:38:39',
                'updated_at' => '2023-09-11 00:38:39',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Rio Grande do Sul',
                'abbreviation' => 'RS',
                'ibge_id' => 43,
                'created_at' => '2023-09-11 00:38:40',
                'updated_at' => '2023-09-11 00:38:40',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Mato Grosso do Sul',
                'abbreviation' => 'MS',
                'ibge_id' => 50,
                'created_at' => '2023-09-11 00:38:41',
                'updated_at' => '2023-09-11 00:38:41',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Mato Grosso',
                'abbreviation' => 'MT',
                'ibge_id' => 51,
                'created_at' => '2023-09-11 00:38:41',
                'updated_at' => '2023-09-11 00:38:41',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Goiás',
                'abbreviation' => 'GO',
                'ibge_id' => 52,
                'created_at' => '2023-09-11 00:38:42',
                'updated_at' => '2023-09-11 00:38:42',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Distrito Federal',
                'abbreviation' => 'DF',
                'ibge_id' => 53,
                'created_at' => '2023-09-11 00:38:45',
                'updated_at' => '2023-09-11 00:38:45',
            ),
        ));
        
        
    }
}